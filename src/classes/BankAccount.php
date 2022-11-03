<?php

declare(strict_types=1);

class BankAccount{

    /**
     * @return float
     */
    public function getBankBalance(): float
    {
        return $this->bankBalance;
    }

    /**
     * @param float $bankBalance
     */
    public function setBankBalance(float $bankBalance): void
    {
        $this->bankBalance = $bankBalance;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }



}