<?php

namespace XeroPHP\Models\PayrollAU\LeaveApplication;

use XeroPHP\Remote;


class LeavePeriod extends Remote\Object {

    /**
     * The Number of Units for the leave
     *
     * @property string[] NumberOfUnits
     */

    /**
     * The Pay Period End Date (YYYY-MM-DD)
     *
     * @property \DateTime PayPeriodEndDate
     */

    /**
     * The Pay Period Start Date (YYYY-MM-DD)
     *
     * @property \DateTime PayPeriodStartDate
     */

    /**
     * See LeavePeriodStatus
     *
     * @property string LeavePeriodStatus
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the stem of the API (core.xro) etc
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    public static function getProperties(){
            return array(
                'NumberOfUnits',
                'PayPeriodEndDate',
                'PayPeriodStartDate',
                'LeavePeriodStatus'
        );
    }


    /**
     * @return string
     */
    public function getNumberOfUnits(){
        return $this->_data['NumberOfUnits'];
    }

    /**
     * @param string[] $value
     * @return LeavePeriod
     */
    public function addNumberOfUnit($value){
        $this->_data['NumberOfUnits'][] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPayPeriodEndDate(){
        return $this->_data['PayPeriodEndDate'];
    }

    /**
     * @param \DateTime $value
     * @return LeavePeriod
     */
    public function setPayPeriodEndDate(\DateTime $value){
        $this->_data['PayPeriodEndDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPayPeriodStartDate(){
        return $this->_data['PayPeriodStartDate'];
    }

    /**
     * @param \DateTime $value
     * @return LeavePeriod
     */
    public function setPayPeriodStartDate(\DateTime $value){
        $this->_data['PayPeriodStartDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeavePeriodStatus(){
        return $this->_data['LeavePeriodStatus'];
    }

    /**
     * @param string $value
     * @return LeavePeriod
     */
    public function setLeavePeriodStatu($value){
        $this->_data['LeavePeriodStatus'] = $value;
        return $this;
    }


}