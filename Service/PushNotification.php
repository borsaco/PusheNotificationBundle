<?php
namespace Borsaco\PusheNotificationBundle\Service;


use Symfony\Component\DependencyInjection\ContainerInterface;
use Borsaco\PusheNotification\PushNotification as Notification;

class PushNotification extends Notification
{
	private $config;
	private $pushNotification;

	public function __construct(ContainerInterface $container)
	{
		$this->config = $container->getParameter('pushe_notification.config');
		$this->pushNotification  = parent::__construct($this->config['token']);
	}

	public function setToken($token)
	{
		$this->pushNotification = new Notification($token);
	}
}
