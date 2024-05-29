<?php

require_once 'ConcreteHandlers.php';

class SupportSystem
{
    private $handler;
    private $questions;

    public function __construct()
    {
        $this->handler = new GeneralInquiryHandler();
        $this->handler->setNext(new BillingHandler())
            ->setNext(new TechnicalSupportHandler())
            ->setNext(new OtherInquiriesHandler());

        $this->questions = [
            'start' => [
                'question' => 'Ласкаво просимо до служби підтримки. Оберіть тип вашого питання:',
                'options' => [
                    '1' => 'Загальні питання',
                    '2' => 'Питання щодо рахунків',
                    '3' => 'Технічна підтримка',
                    '4' => 'Інші питання'
                ]
            ],
            '1' => [
                'question' => 'Загальні питання. Оберіть одну з наступних опцій:',
                'options' => [
                    '1.1' => 'Деталі тарифів',
                    '1.2' => 'Інші загальні питання'
                ]
            ],
            '2' => [
                'question' => 'Питання щодо рахунків. Оберіть одну з наступних опцій:',
                'options' => [
                    '2.1' => 'Перевірка балансу',
                    '2.2' => 'Оплата рахунку'
                ]
            ],
            '3' => [
                'question' => 'Технічна підтримка. Оберіть одну з наступних опцій:',
                'options' => [
                    '3.1' => 'Проблеми з підключенням',
                    '3.2' => 'Проблеми з пристроєм'
                ]
            ],
            '4' => [
                'question' => 'Інші питання. Оберіть одну з наступних опцій:',
                'options' => [
                    '4.1' => 'Скарги',
                    '4.2' => 'Пропозиції'
                ]
            ],
        ];
    }

    public function getNextQuestion($level)
    {
        return $this->questions[$level] ?? null;
    }

    public function getResponse($level)
    {
        return $this->handler->handle($level);
    }
}

