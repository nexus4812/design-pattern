<?php



namespace App\Builder;

use PHPUnit\Framework\TestCase;

class MailTest extends TestCase
{
    public function test_build()
    {
        $builder = new MailBuilder();

        $to = 'nexus@test.to';
        $cc = 'nexus@test.cc';
        $from = 'nexus@test.from';
        $subject = 'nexus@test.from';
        $body = 'Hey!';

        $email = $builder->setTo($to)
            ->setCc($cc)
            ->setFrom($from)
            ->setSubject($subject)
            ->setBody($body)
            ->build();

        $this->assertInstanceOf(Mail::class, $email);

        // array
        $this->assertSame([$to], $email->getTo());
        $this->assertSame([$cc], $email->getCc());
        $this->assertSame([$from], $email->getFrom());

        // string
        $this->assertSame($subject, $email->getSubject());
        $this->assertSame($body, $email->getBody());
    }
}
