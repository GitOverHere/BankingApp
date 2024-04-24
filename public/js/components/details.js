import React, { useState, useEffect } from "react";


export default function Details(){


const [loading,setLoading] = useState(True)


function getinfo(){
	//Given accountid and sessionid return account info
	
	url = window.location +"../api/account/getinfo"
	
	
	
	
	
	
	
}




return (
<>
<div className="dialog-container--resize ng-tns-c35-13">
  <c1-ease-bank-view-details _nghost-rnv-c506="" className="ng-star-inserted">
    <c1-ease-dialog
      _ngcontent-rnv-c506=""
      className="ng-star-inserted"
      style={{}}
    >
      {/**/}
      {/**/}
      {/**/}
      <button
        type="button"
        c1easedialogclose=""
        className="c1-ease-dialog-close-button c1-ease-dialog-interstitial-show-outline ng-star-inserted"
        aria-label="Close Dialog"
      >
        <gng-icon
          size="large"
          iconname="ui-lined:close"
          className="gng-icon--large-size"
        >
          <svg
            width="100%"
            height="100%"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            fit=""
            preserveAspectRatio="xMidYMid meet"
            focusable="false"
          >
            <path
              d="M13.41 12l6.29-6.29a.996.996 0 10-1.41-1.41L12 10.59l-6.29-6.3A.996.996 0 104.3 5.7l6.29 6.3-6.29 6.29a.996.996 0 000 1.41c.19.2.44.3.7.3.26 0 .51-.1.71-.29l6.29-6.3 6.29 6.29c.2.2.45.3.71.3.26 0 .51-.1.71-.29a.996.996 0 000-1.41l-6.3-6.3z"
              fill="#000"
            />
          </svg>
        </gng-icon>
      </button>
      {/**/}
      <div className="c1-ease-dialog-icon__wrapper ng-star-inserted">
        {/**/}
      </div>
      {/**/}
      <h2
        _ngcontent-rnv-c506=""
        c1easedialogtitle=""
        data-testid="viewDetailsDisplayName"
        id="viewDetailsDisplayName"
        className="c1-ease-dialog-title bank-view-details-modal-header ng-star-inserted"
      >
        Savings Account
      </h2>
      {/**/}
      <div className="c1-ease-dialog-content__wrapper">
        <c1-ease-dialog-content
          _ngcontent-rnv-c506=""
          className="c1-ease-dialog-content"
        >
          <div
            _ngcontent-rnv-c506=""
            data-testid="viewDetailsContainer"
            className="bank-view-details-container"
          >
            {/**/}
            <c1-ease-bank-view-details-other
              _ngcontent-rnv-c506=""
              _nghost-rnv-c504=""
              className="ng-star-inserted"
            >
              <c1-ease-bank-view-details-balance-subheader
                _ngcontent-rnv-c504=""
                _nghost-rnv-c498=""
              >
                <div _ngcontent-rnv-c498="" className="bank-view-details-row">
                  <div _ngcontent-rnv-c498="" className="bank-view-details-col">
                    <p
                      _ngcontent-rnv-c498=""
                      id="availableBalanceLabel"
                      data-testid="availableBalanceLabel"
                      className="bank-view-details-sub-heading-label ng-star-inserted"
                    >
                      {" "}
                      Available balance{" "}
                    </p>
                    {/**/}
                    {/**/}
                    <p
                      _ngcontent-rnv-c498=""
                      data-testid="availableBalance"
                      className="bank-view-details-sub-heading-content ng-star-inserted"
                    >
                      {" "}
                      $35.83{" "}
                    </p>
                    {/**/}
                    {/**/}
                  </div>
                </div>
              </c1-ease-bank-view-details-balance-subheader>
              <div _ngcontent-rnv-c504="" className="bank-view-details-row">
                <div _ngcontent-rnv-c504="" className="bank-view-details-col">
                  <h4
                    _ngcontent-rnv-c504=""
                    id="accountInfoLabel"
                    data-testid="accountInfoLabel"
                    className="bank-view-details-section-header"
                  >
                    {" "}
                    Account Info{" "}
                  </h4>
                </div>
              </div>
              <div _ngcontent-rnv-c504="" className="bank-view-details-row">
                <div _ngcontent-rnv-c504="" className="bank-view-details-col">
                  <c1-ease-bank-view-details-current-balance-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c499=""
                  >
                    <div
                      _ngcontent-rnv-c499=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c499=""
                        data-testid="currentBalanceLabel"
                        className="bank-view-details-field-label"
                      >
                        Current balance
                      </h5>
                      <div
                        _ngcontent-rnv-c499=""
                        data-testid="currentBalance"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        $35.83{" "}
                      </div>
                    </div>
                  </c1-ease-bank-view-details-current-balance-field>
                  <c1-ease-bank-view-details-account-number-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c492=""
                  >
                    <div
                      _ngcontent-rnv-c492=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c492=""
                        data-testid="accountNumberLabel"
                        className="bank-view-details-field-label"
                      >
                        Account number
                      </h5>
                      <div
                        _ngcontent-rnv-c492=""
                        data-testid="accountNumber_TLNPI"
                        name="accountNumber_TLNPI"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        36129737251{" "}
                      </div>
                    </div>
                  </c1-ease-bank-view-details-account-number-field>
                  <div
                    _ngcontent-rnv-c504=""
                    className="bank-view-details-field ng-star-inserted"
                  >
                    <h5
                      _ngcontent-rnv-c504=""
                      id="primaryAccountHolderLabel"
                      data-testid="primaryAccountHolderLabel"
                      className="bank-view-details-field-label"
                    >
                      {" "}
                      Account holder{" "}
                    </h5>
                    <div
                      _ngcontent-rnv-c504=""
                      data-testid="primaryAccountHolder"
                      className="bank-view-details-field-content"
                    >
                      {" "}
                      Binayak Sahu{" "}
                    </div>
                  </div>
                  {/**/}
                  {/**/}
                  {/**/}
                  {/**/}
                  <c1-ease-bank-view-details-secondary-holder-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c503=""
                  >
                    {/**/}
                  </c1-ease-bank-view-details-secondary-holder-field>
                  <c1-ease-bank-view-details-account-type-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c502=""
                  >
                    <div
                      _ngcontent-rnv-c502=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c502=""
                        data-testid="accountTypeLabel"
                        className="bank-view-details-field-label"
                      >
                        {" "}
                        Account type{" "}
                      </h5>
                      <div
                        _ngcontent-rnv-c502=""
                        data-testid="accountType"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        360 Performance Savings {/**/}
                      </div>
                    </div>
                  </c1-ease-bank-view-details-account-type-field>
                  {/**/}
                </div>
                <div
                  _ngcontent-rnv-c504=""
                  className="bank-view-details-col ng-star-inserted"
                >
                  <div
                    _ngcontent-rnv-c504=""
                    className="bank-view-details-field-empty"
                  >
                    &nbsp;
                  </div>
                  <c1-ease-bank-view-details-routing-number-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c501=""
                  >
                    <div
                      _ngcontent-rnv-c501=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c501=""
                        data-testid="routingNumberLabel"
                        className="bank-view-details-field-label"
                      >
                        Routing number
                      </h5>
                      <div
                        _ngcontent-rnv-c501=""
                        data-testid="routingNumber"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        031176110{" "}
                      </div>
                    </div>
                  </c1-ease-bank-view-details-routing-number-field>
                  <div
                    _ngcontent-rnv-c504=""
                    className="bank-view-details-field"
                  >
                    <h5
                      _ngcontent-rnv-c504=""
                      data-testid="primaryDebitCardNumberLabel"
                      className="bank-view-details-field-label"
                    >
                      {" "}
                      Debit card number{" "}
                    </h5>
                    {/**/}
                    <div
                      _ngcontent-rnv-c504=""
                      id="primaryDebitCardNumber"
                      className="bank-view-details-field-content ng-star-inserted"
                    >
                      {" "}
                      N/A{" "}
                    </div>
                    {/**/}
                  </div>
                  {/**/}
                  <c1-ease-bank-view-details-ownership-type-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c500=""
                  >
                    <div
                      _ngcontent-rnv-c500=""
                      className="bank-view-details-field ng-star-inserted"
                    >
                      <h5
                        _ngcontent-rnv-c500=""
                        data-testid="ownershipType1Label"
                        className="bank-view-details-field-label"
                      >
                        Ownership type
                      </h5>
                      <div
                        _ngcontent-rnv-c500=""
                        data-testid="ownershipType1"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        Individual{" "}
                      </div>
                    </div>
                    {/**/}
                  </c1-ease-bank-view-details-ownership-type-field>
                </div>
                {/**/}
                {/**/}
              </div>
              <c1-ease-bank-view-details-overdraft-details _ngcontent-rnv-c504="">
                {/**/}
              </c1-ease-bank-view-details-overdraft-details>
              <div _ngcontent-rnv-c504="" className="bank-view-details-row">
                <div _ngcontent-rnv-c504="" className="bank-view-details-col">
                  <h4
                    _ngcontent-rnv-c504=""
                    data-testid="interestHeaderLabel"
                    className="bank-view-details-section-header"
                  >
                    Interest
                  </h4>
                </div>
              </div>
              <div _ngcontent-rnv-c504="" className="bank-view-details-row">
                <div _ngcontent-rnv-c504="" className="bank-view-details-col">
                  <c1-ease-bank-view-details-current-apy-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c494=""
                  >
                    <div
                      _ngcontent-rnv-c494=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c494=""
                        className="bank-view-details-field-label"
                      >
                        <span
                          _ngcontent-rnv-c494=""
                          data-testid="currentApyLabel"
                          className="ng-star-inserted"
                        >
                          {" "}
                          Current APY{" "}
                          <span
                            _ngcontent-rnv-c494=""
                            role="button"
                            id="apy_tooltip"
                            aria-label="tooltip"
                            tabIndex={0}
                            className="gng-tooltip__trigger gng-tooltip__info-icon gng-tooltip__info-icon--small ng-star-inserted"
                            aria-describedby="cdk-describedby-message-rnv-1-4"
                            cdk-describedby-host="rnv-1"
                          />
                          {/**/}
                          {/**/}
                        </span>
                        {/**/}
                        {/**/}
                      </h5>
                      <div
                        _ngcontent-rnv-c494=""
                        data-testid="annualPercentageYield"
                        className="bank-view-details-field-content ng-star-inserted"
                      >
                        {" "}
                        4.25%{" "}
                      </div>
                      {/**/}
                    </div>
                  </c1-ease-bank-view-details-current-apy-field>
                  {/**/}
                  <c1-ease-bank-view-details-interest-current-month-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c497=""
                  >
                    <div
                      _ngcontent-rnv-c497=""
                      className="bank-view-details-field ng-star-inserted"
                    >
                      <h5
                        _ngcontent-rnv-c497=""
                        data-testid="interestCurrentMonthLabel"
                        className="bank-view-details-field-label"
                      >
                        {" "}
                        Interest earned in April{" "}
                      </h5>
                      <div
                        _ngcontent-rnv-c497=""
                        data-testid="interestPaidAmountCurrentMonth"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        $0.00{" "}
                      </div>
                    </div>
                    {/**/}
                  </c1-ease-bank-view-details-interest-current-month-field>
                </div>
                <div _ngcontent-rnv-c504="" className="bank-view-details-col">
                  <c1-ease-bank-view-details-interest-previous-year-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c496=""
                  >
                    <div
                      _ngcontent-rnv-c496=""
                      className="bank-view-details-field ng-star-inserted"
                    >
                      <h5
                        _ngcontent-rnv-c496=""
                        data-testid="interestLastYearLabel"
                        className="bank-view-details-field-label"
                      >
                        {" "}
                        Interest paid in 2023{" "}
                      </h5>
                      <div
                        _ngcontent-rnv-c496=""
                        data-testid="interestPaidAmountLastYear"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        $0.78{" "}
                      </div>
                    </div>
                    {/**/}
                  </c1-ease-bank-view-details-interest-previous-year-field>
                  <c1-ease-bank-view-details-interest-current-year-field
                    _ngcontent-rnv-c504=""
                    _nghost-rnv-c495=""
                  >
                    <div
                      _ngcontent-rnv-c495=""
                      className="bank-view-details-field"
                    >
                      <h5
                        _ngcontent-rnv-c495=""
                        data-testid="interestCurrentYearLabel"
                        className="bank-view-details-field-label"
                      >
                        {" "}
                        Interest paid in 2024{" "}
                      </h5>
                      <div
                        _ngcontent-rnv-c495=""
                        data-testid="interestCurrentYear"
                        className="bank-view-details-field-content"
                      >
                        {" "}
                        $0.09{" "}
                      </div>
                    </div>
                  </c1-ease-bank-view-details-interest-current-year-field>
                  {/**/}
                </div>
              </div>
            </c1-ease-bank-view-details-other>
            {/**/}
            {/**/}
            <div _ngcontent-rnv-c506="" className="bank-view-details-row">
              <div _ngcontent-rnv-c506="" className="bank-view-details-col">
                <div
                  _ngcontent-rnv-c506=""
                  className="bank-view-details-field-no-border ng-star-inserted"
                >
                  <a
                    _ngcontent-rnv-c506=""
                    id="AccountTermsWeb"
                    data-testid="AccountTermsLink"
                    href="#"
                    className="bank-view-details-link-cursor"
                  >
                    View Current Terms &amp; Conditions{" "}
                  </a>
                </div>
                {/**/}
                <a _ngcontent-rnv-c506="" className="hidden">
                  This is an invisible element, added to take the focus to close
                  button
                </a>
              </div>
            </div>
          </div>
        </c1-ease-dialog-content>
      </div>
      <div className="c1-ease-dialog-actions__wrapper" />
      <div className="c1-ease-dialog-disclaimer-text__wrapper" />
      <div className="c1-ease-dialog-footer__wrapper" />
      {/**/}
    </c1-ease-dialog>
    {/**/}
  </c1-ease-bank-view-details>
  {/**/}
</div>
<>

);
}