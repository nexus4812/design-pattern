<?php

namespace App\Builder;

class MailBuilder
{
    /**
     * @var string[]
     */
    private $from;

    /**
     * @var string[]
     */
    private $to;

    /**
     * @var string[]
     */
    private $cc;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @param string[] $from
     * @return MailBuilder
     */
    public function setFrom(string ...$from): self
    {
        return $this->copy('from', $from);
    }

    /**
     * @param string[] $to
     * @return MailBuilder
     */
    public function setTo(string ...$to): self
    {
        return $this->copy('to', $to);
    }

    /**
     * @param string[] $cc
     * @return MailBuilder
     */
    public function setCc(string ...$cc): self
    {
        return $this->copy('cc', $cc);
    }

    /**
     * @param string $subject
     * @return MailBuilder
     */
    public function setSubject(string $subject): self
    {
        return $this->copy('subject', $subject);
    }

    /**
     * @param string $body
     * @return MailBuilder
     */
    public function setBody(string $body): self
    {
        return $this->copy('body', $body);
    }

    /**
     * @param string $key
     * @param $value string|string[]
     * @return MailBuilder
     */
    private function copy(string $key, $value): self
    {
        $new = clone $this;
        $new->{$key} = $value;
        return $new;
    }

    public function build():Mail
    {
        return new Mail(
            $this->from,
            $this->to,
            $this->cc,
            $this->subject,
            $this->body
        );
    }
}
