<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\PaymentService;
use App\Exceptions\InvalidHumanNameException;

class PaymentServiceTest extends TestCase
{
    private $paymentService;

    /**
     * Wrapper method to conveniently fetch the current PaymentService singleton instance.
     *
     * @return PaymentService
     */
    private function getPaymentService()
    {
        return PaymentService::getInstance();
    }

    /**
     * Tests whether a valid CardHolderName value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardHolderNameSetterAndGetter()
    {
        $cardHolderName = 'Mr JS Wood';
        $this->getPaymentService()->setCardHolderName($cardHolderName);
        $this->assertTrue(
            $this->getPaymentService()->getCardHolderName() === $cardHolderName
        );
    }

    /**
     * Tests whether the CardHolderName setter correctly strips leading and trailing whitespace.
     *
     * @return void
     */
    public function testCardHolderNameSetterTrimsWhitespace()
    {
        $input = '  Mr JS Wood   ';
        $expectedOutput = 'Mr JS Wood';
        $this->getPaymentService()->setCardHolderName($input);
        $this->assertTrue(
            $this->getPaymentService()->getCardHolderName() === $expectedOutput
        );
    }

    /**
     * Tests whether the CardHolderName setter correctly throws an
     * exception when illegal characters are presented.
     *
     * @expectedException App\Exceptions\InvalidHumanNameException
     * @return void
     */
    public function testCardHolderNameSetterThrowsExceptionForInvalidChars()
    {
        // $this->expectException(InvalidHumanNameException::class);

        $input = 'Mr !"£$%^&*()_+" Wood';
        $this->getPaymentService()->setCardHolderName($input);
    }

    /**
     * Tests whether a valid CardType value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardTypeSetterAndGetter()
    {
        $cardType = 'Visa Debit';
        $this->getPaymentService()->setCardType($cardType);
        $this->assertTrue(
            $this->getPaymentService()->getCardType() === $cardType
        );
    }

    /**
     * Tests whether a valid CardNumber value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardNumberSetterAndGetter()
    {
        $cardNumber = '4539710234560987';
        $this->getPaymentService()->setCardNumber($cardNumber);
        $this->assertTrue(
            $this->getPaymentService()->getCardNumber() === $cardNumber
        );
    }

    /**
     * Tests whether a valid CardExpiryMonth value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardExpiryMonthSettersAndGetters()
    {
        $cardExpiryMonth = '02';
        $this->getPaymentService()->setCardExpiryMonth($cardExpiryMonth);
        $this->assertTrue(
            $this->getPaymentService()->getCardExpiryMonth() === $cardExpiryMonth
        );
    }

    /**
     * Tests whether a valid CardExpiryYear value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardExpiryYearGettersAndSetters()
    {
        $cardExpiryYear = '2019';
        $this->getPaymentService()->setCardExpiryYear($cardExpiryYear);
        $this->assertTrue(
            $this->getPaymentService()->getCardExpiryYear() === $cardExpiryYear
        );
    }

    /**
     * Tests whether a valid CardStartMonth value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardStartMonthGettersAndSetters()
    {
        $cardStartMonth = '11';
        $this->getPaymentService()->setCardStartMonth($cardStartMonth);
        $this->assertTrue(
            $this->getPaymentService()->getCardStartMonth() === $cardStartMonth
        );
    }

    /**
     * Tests whether a valid CardStartYear value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardStartYearSettersAndGetters()
    {
        $cardStartYear = '2016';
        $this->getPaymentService()->setCardStartYear($cardStartYear);
        $this->assertTrue(
            $this->getPaymentService()->getCardStartYear() === $cardStartYear
        );
    }

    /**
     * Tests whether a valid CardCvv value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testCardCvvGettersAndSetters()
    {
        $cardCvv = '2016';
        $this->getPaymentService()->setCardStartYear($cardCvv);
        $this->assertTrue(
            $this->getPaymentService()->getCardStartYear() === $cardCvv
        );
    }

    /**
     * Tests whether a valid AmountSterling value injected into the
     * setter is returned unchanged by its getter.
     *
     * @return void
     */
    public function testAmountSterlingGettersAndSetters()
    {
        $amountSterling = 19.99;
        $this->getPaymentService()->setAmountSterling($amountSterling);
        $this->assertTrue(
            $this->getPaymentService()->getAmountSterling() === $amountSterling
        );
    }
}
