<?php 
namespace Mailers;

class UserMailer extends Mailer {

	public function welcome()
	{
		$this->subject = 'Welcome to My Site';
		$this->view = 'emails.user.welcome';
		
		return $this;
	}
}