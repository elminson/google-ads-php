<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/account_budget.proto

namespace Google\Ads\GoogleAds\V1\Resources\AccountBudget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pending proposal associated with the enclosing account-level budget,
 * if applicable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.AccountBudget.PendingAccountBudgetProposal</code>
 */
class PendingAccountBudgetProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     */
    private $account_budget_proposal = null;
    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     */
    private $proposal_type = 0;
    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     */
    private $start_date_time = null;
    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     */
    private $purchase_order_number = null;
    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     */
    private $notes = null;
    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     */
    private $creation_date_time = null;
    protected $end_time;
    protected $spending_limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $account_budget_proposal
     *           The resource name of the proposal.
     *           AccountBudgetProposal resource names have the form:
     *           `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *     @type int $proposal_type
     *           The type of this proposal, e.g. END to end the budget associated
     *           with this proposal.
     *     @type \Google\Protobuf\StringValue $name
     *           The name to assign to the account-level budget.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           The start time in yyyy-MM-dd HH:mm:ss format.
     *     @type \Google\Protobuf\StringValue $purchase_order_number
     *           A purchase order number is a value that helps users reference this budget
     *           in their monthly invoices.
     *     @type \Google\Protobuf\StringValue $notes
     *           Notes associated with this budget.
     *     @type \Google\Protobuf\StringValue $creation_date_time
     *           The time when this account-level budget proposal was created.
     *           Formatted as yyyy-MM-dd HH:mm:ss.
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           The end time in yyyy-MM-dd HH:mm:ss format.
     *     @type int $end_time_type
     *           The end time as a well-defined type, e.g. FOREVER.
     *     @type \Google\Protobuf\Int64Value $spending_limit_micros
     *           The spending limit in micros.  One million is equivalent to
     *           one unit.
     *     @type int $spending_limit_type
     *           The spending limit as a well-defined type, e.g. INFINITE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AccountBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccountBudgetProposal()
    {
        return $this->account_budget_proposal;
    }

    /**
     * Returns the unboxed value from <code>getAccountBudgetProposal()</code>

     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @return string|null
     */
    public function getAccountBudgetProposalValue()
    {
        $wrapper = $this->getAccountBudgetProposal();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccountBudgetProposal($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account_budget_proposal = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountBudgetProposalValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAccountBudgetProposal($wrappedVar);
    }

    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     * @return int
     */
    public function getProposalType()
    {
        return $this->proposal_type;
    }

    /**
     * The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProposalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\AccountBudgetProposalTypeEnum_AccountBudgetProposalType::class);
        $this->proposal_type = $var;

        return $this;
    }

    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameValue()
    {
        $wrapper = $this->getName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setName($wrappedVar);
    }

    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getStartDateTime()</code>

     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @return string|null
     */
    public function getStartDateTimeValue()
    {
        $wrapper = $this->getStartDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setStartDateTime($wrappedVar);
    }

    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchase_order_number;
    }

    /**
     * Returns the unboxed value from <code>getPurchaseOrderNumber()</code>

     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @return string|null
     */
    public function getPurchaseOrderNumberValue()
    {
        $wrapper = $this->getPurchaseOrderNumber();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPurchaseOrderNumberValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPurchaseOrderNumber($wrappedVar);
    }

    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Returns the unboxed value from <code>getNotes()</code>

     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @return string|null
     */
    public function getNotesValue()
    {
        $wrapper = $this->getNotes();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->notes = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNotesValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setNotes($wrappedVar);
    }

    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDateTime()
    {
        return $this->creation_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCreationDateTime()</code>

     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @return string|null
     */
    public function getCreationDateTimeValue()
    {
        $wrapper = $this->getCreationDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCreationDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCreationDateTime($wrappedVar);
    }

    /**
     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->readOneof(5);
    }

    /**
     * Returns the unboxed value from <code>getEndDateTime()</code>

     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @return string|null
     */
    public function getEndDateTimeValue()
    {
        $wrapper = $this->getEndDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setEndDateTime($wrappedVar);
    }

    /**
     * The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.TimeTypeEnum.TimeType end_time_type = 6;</code>
     * @return int
     */
    public function getEndTimeType()
    {
        return $this->readOneof(6);
    }

    /**
     * The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.TimeTypeEnum.TimeType end_time_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\TimeTypeEnum_TimeType::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getSpendingLimitMicros()
    {
        return $this->readOneof(7);
    }

    /**
     * Returns the unboxed value from <code>getSpendingLimitMicros()</code>

     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @return int|string|null
     */
    public function getSpendingLimitMicrosValue()
    {
        $wrapper = $this->getSpendingLimitMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setSpendingLimitMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setSpendingLimitMicrosValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setSpendingLimitMicros($wrappedVar);
    }

    /**
     * The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8;</code>
     * @return int
     */
    public function getSpendingLimitType()
    {
        return $this->readOneof(8);
    }

    /**
     * The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSpendingLimitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\SpendingLimitTypeEnum_SpendingLimitType::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->whichOneof("end_time");
    }

    /**
     * @return string
     */
    public function getSpendingLimit()
    {
        return $this->whichOneof("spending_limit");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingAccountBudgetProposal::class, \Google\Ads\GoogleAds\V1\Resources\AccountBudget_PendingAccountBudgetProposal::class);

