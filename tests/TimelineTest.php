<?php
use PHPUnit\Framework\TestCase;

class TimelineTest extends TestCase
{
    public function testGithubTimelineFetch()
    {
        $url = "https://github.com/timeline";
        $response = file_get_contents($url);
        $this->assertNotEmpty($response, "GitHub Timeline should not be empty.");
    }

    public function testEmailContainsUnsubscribeLink()
    {
        $emailBody = file_get_contents(__DIR__ . "/sample_email.txt");
        $this->assertStringContainsString("unsubscribe", $emailBody, "Email must contain an unsubscribe link.");
    }
}
