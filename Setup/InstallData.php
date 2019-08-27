<?php

namespace Redbox\Linkedin\Setup;

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\State;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Customer\Model\Customer;
use Magento\Customer\Setup\CustomerSetupFactory;

class InstallData implements InstallDataInterface
{
    /**
     * @var CustomerSetupFactory
     */
    private $customerSetupFactory;
    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var State
     */
    private $state;


    public function __construct(
        CustomerSetupFactory $customerSetupFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        CustomerRepositoryInterface $customerRepository,
        State $state
    ) {
        $this->customerSetupFactory = $customerSetupFactory;
        $this->customerRepository = $customerRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->state = $state;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->createRezolveCustomerEmail();
        $setup->endSetup();
    }

    protected function createRezolveCustomerEmail()
    {
        $customerSetup = $this->customerSetupFactory->create();
        $code = 'linkedin_profile';

        $customerSetup->addAttribute(
            Customer::ENTITY,
            $code,
            [
                'label' => 'Linkedin Profile',
                'input' => 'text',
                'required'=> false,
                'position'=> 80,
                'visible' => true,
                'system'=> false,
                'is_used_in_grid' => true,
                'is_visible_in_grid'=> true,
                'is_filterable_in_grid' => true,
                'is_searchable_in_grid' => true,
                'validate_rules' => '{"max_text_length":250,"min_text_length":1, "input_validation":"validate-url"}'
            ]
        );

        // add attribute to form
        /** @var  $attribute */
        $attribute = $customerSetup->getEavConfig()->getAttribute(Customer::ENTITY, $code);
        $attribute->setData('used_in_forms', ['customer_account_create',
            'customer_account_edit',
            'checkout_register',
            'adminhtml_customer',
            'adminhtml_checkout']);

        $attribute->save();
    }
}


