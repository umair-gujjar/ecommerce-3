<?php

namespace App\Services;

use App\Validators\HumanNameValidator;

final class PaymentService
{
    private static $instance;
    private $cardHolderName;
    private $cardType;
    private $cardNumber;
    private $cardStartMonth;
    private $cardStartYear;
    private $cardExpiryMonth;
    private $cardExpiryYear;
    private $cardCvv;
    private $amountSterling;

    private function __construct()
    {
    }

    /**
     * Fetches the current singleton instance of this class.
     *
     * @return PaymentService
     */
    public static function getInstance(): self
    {
        if (! self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Sets the cardholder name for this payment.
     *
     * @param string $cardHolderName A string representing the cardholder's name.
     * @throws InvalidHumanNameException
     * @return void
     */
    public function setCardHolderName(string $cardHolderName): void
    {
        $cardHolderName = trim($cardHolderName);
        $validator = new HumanNameValidator();
        $validator->validate($cardHolderName);
        $this->cardHolderName = $cardHolderName;
    }

    /**
     * Gets the cardholder name for this payment.
     *
     * @return string $cardHolderName A string representing the cardholder's name
     */
    public function getCardHolderName(): string
    {
        return $this->cardHolderName;
    }

    /**
     * Sets the card type for this payment.
     *
     * @param string $cardType A string representing the payment card type.
     * @return void
     */
    public function setCardType(string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Gets the card type for this payment.
     *
     * @return string $cardType A string representing the payment card type
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }

    /**
     * Sets the card number for this payment.
     *
     * @param string $cardNumber A string representing the payment card number.
     * @return void
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Gets the card number for this payment.
     *
     * @return string $cardNumber A string representing the payment card number.
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * Sets the card start month for this payment.
     *
     * @param string $cardStartMonth A string representing the payment card start month.
     * @return void
     */
    public function setCardStartMonth(string $cardStartMonth): void
    {
        $this->cardStartMonth = $cardStartMonth;
    }

    /**
     * Gets the card start month for this payment.
     *
     * @return string $cardStartMOnth A string representing the payment card start month.
     */
    public function getCardStartMonth(): string
    {
        return $this->cardStartMonth;
    }

    /**
     * Sets the card start year for this payment.
     *
     * @param string $cardStartYear A string representing the payment card start year.
     * @return void
     */
    public function setCardStartYear(string $cardStartYear): void
    {
        $this->cardStartYear = $cardStartYear;
    }

    /**
     * Gets the card start year for this payment.
     *
     * @return string $cardStartYear A string representing the payment card start year.
     */
    public function getCardStartYear(): string
    {
        return $this->cardStartYear;
    }

    /**
     * Sets the card expiry month for this payment.
     *
     * @param string $cardExpiryMonth A string representing the payment card expiry month.
     * @return void
     */
    public function setCardExpiryMonth(string $cardExpiryMonth): void
    {
        $this->cardExpiryMonth = $cardExpiryMonth;
    }

    /**
     * Gets the card expiry month for this payment.
     *
     * @return string $cardExpiryMonth A string representing the payment card expiry month.
     */
    public function getCardExpiryMonth(): string
    {
        return $this->cardExpiryMonth;
    }

    /**
     * Sets the card expiry year for this payment.
     *
     * @param string $cardExpiryYear A string representing the payment card expiry year.
     * @return void
     */
    public function setCardExpiryYear(string $cardExpiryYear): void
    {
        $this->cardExpiryYear = $cardExpiryYear;
    }

    /**
     * Gets the card expiry year for this payment.
     *
     * @return string $cardExpiryYear A string representing the payment card expiry year.
     */
    public function getCardExpiryYear(): string
    {
        return $this->cardExpiryYear;
    }

    /**
     * Sets the card cvv for this payment.
     *
     * @param string $cardCvv A string representing the payment card cvv.
     * @return void
     */
    public function setCardCvv(string $cardCvv): void
    {
        $this->cardCvv = $cardCvv;
    }

    /**
     * Gets the card cvv for this payment.
     *
     * @return string $cardCvv A string representing the payment card cvv.
     */
    public function getCardCvv(): string
    {
        return $this->cardCvv ?? '';
    }

    /**
     * Sets the amount sterling this payment.
     *
     * @param float $amountSterling The total amount payable in British Pounds Sterling.
     * @return void
     */
    public function setAmountSterling(float $amountSterling): void
    {
        $this->amountSterling = $amountSterling;
    }

    /**
     * Gets the amount sterling for this payment.
     *
     * @return float $amountSterling The total amount payable in British Pounds Sterling.
     */
    public function getAmountSterling(): float
    {
        return $this->amountSterling ?? 0.00;
    }
}
