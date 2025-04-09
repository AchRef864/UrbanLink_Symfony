<?php
// src/Controller/TestEmailController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;

class TestEmailController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/test/email', name: 'test_email')]
    public function testEmail(MailerInterface $mailer): Response
    {
        $results = [];
        $success = false;
        $error = null;

        // Stage 1: Check environment variables
        $envTest = $this->testEnvVars();
        $results['Environment Variables'] = $envTest;

        if (!$envTest['success']) {
            return $this->render('test/email_test.html.twig', [
                'results' => $results,
                'success' => $success,
                'error' => $envTest['message']
            ]);
        }

        // Stage 2: Test email sending
        try {
            $email = (new Email())
                ->from($_ENV['MAILER_FROM'])
                ->to($_ENV['MAILER_FROM'])
                ->subject('Test Email from Symfony')
                ->text('This is a test email body.');

            $mailer->send($email);
            $success = true;
            $results['Email Sending'] = [
                'success' => true,
                'message' => '✅ Email sent successfully! Check your inbox.'
            ];
        } catch (TransportExceptionInterface $e) {
            $error = 'Email sending failed: ' . $e->getMessage();
            $this->logger->error($error);
            $results['Email Sending'] = [
                'success' => false,
                'message' => '❌ ' . $error
            ];
        }

        return $this->render('test/email_test.html.twig', [
            'results' => $results,
            'success' => $success,
            'error' => $error
        ]);
    }

    /**
     * Tests if required environment variables are set
     */
    private function testEnvVars(): array
    {
        $requiredVars = ['MAILER_DSN', 'MAILER_FROM'];
        $missingVars = [];

        foreach ($requiredVars as $var) {
            if (empty($_ENV[$var])) {
                $missingVars[] = $var;
            }
        }

        if (count($missingVars) > 0) {
            return [
                'success' => false,
                'message' => 'Missing environment variables: ' . implode(', ', $missingVars)
            ];
        }

        return [
            'success' => true,
            'message' => 'All required environment variables are set'
        ];
    }
}