<?php

namespace Plugin\SendLogReport\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SendLogReportConfig
 */
class SendLogReportConfig extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $is_slack;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $slack_error_level;

    /**
     * @var boolean
     */
    private $is_mail;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $mail_from;

    /**
     * @var string
     */
    private $mail_to1;

    /**
     * @var string
     */
    private $mail_to2;

    /**
     * @var string
     */
    private $mail_to3;

    /**
     * @var string
     */
    private $mail_to4;

    /**
     * @var string
     */
    private $mail_to5;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $log_select;

    /**
     * @var integer
     */
    private $mail_error_level;


    /**
     * Set id
     *
     * @param integer $id
     * @return SendLogReportConfig
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set is_slack
     *
     * @param boolean $isSlack
     * @return SendLogReportConfig
     */
    public function setIsSlack($isSlack)
    {
        $this->is_slack = $isSlack;

        return $this;
    }

    /**
     * Get is_slack
     *
     * @return boolean
     */
    public function getIsSlack()
    {
        return $this->is_slack;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return SendLogReportConfig
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set channel
     *
     * @param string $channel
     * @return SendLogReportConfig
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return SendLogReportConfig
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set slack_error_level
     *
     * @param integer $slackErrorLevel
     * @return SendLogReportConfig
     */
    public function setSlackErrorLevel($slackErrorLevel)
    {
        $this->slack_error_level = $slackErrorLevel;

        return $this;
    }

    /**
     * Get slack_error_level
     *
     * @return integer
     */
    public function getSlackErrorLevel()
    {
        return $this->slack_error_level;
    }

    /**
     * Set is_mail
     *
     * @param boolean $isMail
     * @return SendLogReportConfig
     */
    public function setIsMail($isMail)
    {
        $this->is_mail = $isMail;

        return $this;
    }

    /**
     * Get is_mail
     *
     * @return boolean
     */
    public function getIsMail()
    {
        return $this->is_mail;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return SendLogReportConfig
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set mail_from
     *
     * @param string $mailFrom
     * @return SendLogReportConfig
     */
    public function setMailFrom($mailFrom)
    {
        $this->mail_from = $mailFrom;

        return $this;
    }

    /**
     * Get mail_from
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mail_from;
    }

    /**
     * Set mail_to1
     *
     * @param string $mailTo1
     * @return SendLogReportConfig
     */
    public function setMailTo1($mailTo1)
    {
        $this->mail_to1 = $mailTo1;

        return $this;
    }

    /**
     * Get mail_to1
     *
     * @return string
     */
    public function getMailTo1()
    {
        return $this->mail_to1;
    }

    /**
     * Set mail_to2
     *
     * @param string $mailTo2
     * @return SendLogReportConfig
     */
    public function setMailTo2($mailTo2)
    {
        $this->mail_to2 = $mailTo2;

        return $this;
    }

    /**
     * Get mail_to2
     *
     * @return string
     */
    public function getMailTo2()
    {
        return $this->mail_to2;
    }

    /**
     * Set mail_to3
     *
     * @param string $mailTo3
     * @return SendLogReportConfig
     */
    public function setMailTo3($mailTo3)
    {
        $this->mail_to3 = $mailTo3;

        return $this;
    }

    /**
     * Get mail_to3
     *
     * @return string
     */
    public function getMailTo3()
    {
        return $this->mail_to3;
    }

    /**
     * Set mail_to4
     *
     * @param string $mailTo4
     * @return SendLogReportConfig
     */
    public function setMailTo4($mailTo4)
    {
        $this->mail_to4 = $mailTo4;

        return $this;
    }

    /**
     * Get mail_to4
     *
     * @return string
     */
    public function getMailTo4()
    {
        return $this->mail_to4;
    }

    /**
     * Set mail_to5
     *
     * @param string $mailTo5
     * @return SendLogReportConfig
     */
    public function setMailTo5($mailTo5)
    {
        $this->mail_to5 = $mailTo5;

        return $this;
    }

    /**
     * Get mail_to5
     *
     * @return string
     */
    public function getMailTo5()
    {
        return $this->mail_to5;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return SendLogReportConfig
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set log_select
     *
     * @param string $logSelect
     * @return SendLogReportConfig
     */
    public function setLogSelect($logSelect)
    {
        $this->log_select = $logSelect;

        return $this;
    }

    /**
     * Get log_select
     *
     * @return string
     */
    public function getLogSelect()
    {
        if (is_array($this->log_select)) {
            return $this->log_select;
        }

        return json_decode($this->log_select);
    }

    /**
     * Set mail_error_level
     *
     * @param integer $mailErrorLevel
     * @return SendLogReportConfig
     */
    public function setMailErrorLevel($mailErrorLevel)
    {
        $this->mail_error_level = $mailErrorLevel;

        return $this;
    }

    /**
     * Get mail_error_level
     *
     * @return integer
     */
    public function getMailErrorLevel()
    {
        return $this->mail_error_level;
    }
}
