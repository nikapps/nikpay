<?php

namespace spec\Nikapps\NikPay\PaymentProviders\Saman;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SamanTranslatorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Nikapps\NikPay\PaymentProviders\Saman\SamanTranslator');
    }

    public function it_should_return_error_description()
    {
        $this->describe(-3)
            ->shouldBe('ورودیها حاوی کارکترهای ریرمجاز میباشند.');
    }

    public function it_should_return_error_code_when_description_is_not_available()
    {
        $this->describe(-2000)->shouldBe(-2000);
    }

    public function it_should_return_state_description()
    {
        $this->describe('Invalid Amount')
            ->shouldBe('مبلغ سند برگشتی، از مبلغ تراکنش اصلی بیشتر است.');
    }

    public function it_should_return_state_code_when_description_is_not_available()
    {
        $this->describe('Not Available State Code')
            ->shouldBe('Not Available State Code');
    }
}
