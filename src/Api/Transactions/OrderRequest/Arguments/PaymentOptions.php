<?php declare(strict_types=1);
/**
 * Copyright © 2020 MultiSafepay, Inc. All rights reserved.
 * See DISCLAIMER.md for disclaimer details.
 */

namespace MultiSafepay\Api\Transactions\OrderRequest\Arguments;

/**
 * Class PaymentOptions
 * @package MultiSafepay\Api\Transactions\OrderRequest\Arguments
 */
class PaymentOptions
{
    /**
     * @var string
     */
    private $notificationUrl = '';

    /**
     * @var string
     */
    private $redirectUrl = '';

    /**
     * @var string
     */
    private $cancelUrl = '';

    /**
     * @var bool
     */
    private $closeWindow = true;

    /**
     * @param string $notificationUrl
     * @return PaymentOptions
     */
    public function addNotificationUrl(string $notificationUrl): PaymentOptions
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    /**
     * @param string $redirectUrl
     * @return PaymentOptions
     */
    public function addRedirectUrl(string $redirectUrl): PaymentOptions
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    /**
     * @param string $cancelUrl
     * @return PaymentOptions
     */
    public function addCancelUrl(string $cancelUrl): PaymentOptions
    {
        $this->cancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * @param bool $closeWindow
     * @return PaymentOptions
     */
    public function addCloseWindow(bool $closeWindow): PaymentOptions
    {
        $this->closeWindow = $closeWindow;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getNotificationUrl(): string
    {
        return $this->notificationUrl;
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * @return string
     */
    public function getCancelUrl(): string
    {
        return $this->cancelUrl;
    }

    /**
     * @return bool
     */
    public function isCloseWindow(): bool
    {
        return $this->closeWindow;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'notification_url' => $this->getNotificationUrl(),
            'redirect_url' => $this->getRedirectUrl(),
            'cancel_url' => $this->getCancelUrl(),
            'close_window' => $this->isCloseWindow()
        ];
    }
}