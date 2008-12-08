<?php
class LoginForm extends sfForm
{

  protected $user;

  public function __construct(sfUser $user)
  {
    $this->user=$user;
    parent::__construct();
  }
  public function configure()
  {
    $this->setWidgets(array(
      'password'    => new sfWidgetFormInputPassword(),
      'remember_me' => new sfWidgetFormInputCheckbox(),
      'i_will_not_use_LimeTracker_for_copyright_infringement' => new sfWidgetFormInputCheckbox(),
    ));
    $this->setValidators(array(
      'password'    =>   new sfValidatorCallback(array(
        'required' => true,
        'callback' => Array($this,'passwordCallback'),
        'arguments' => Array($this->getValue('password'))
      )),
      'remember_me' =>  new sfValidatorPass(Array('required'=>false)),
    ));
    $this->validatorSchema->setOption('allow_extra_fields', true); // remove this eventually FIXME
  }

  public function passwordCallback($validator,$password)
  {
    if(!$this->user->authenticatePassword($password))
    {
      throw new sfValidatorError($validator, $validator->getMessage('invalid'));
    }
  }

 }
