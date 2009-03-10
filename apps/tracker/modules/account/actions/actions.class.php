<?php

/**
 * account actions.
 *
 * @package    sflimetracker
 * @subpackage account
 */
class accountActions extends sfActions
{

  public function executeLogin($request)
  {
    
    $user = $this->getUser();

    if($user->isAuthenticated())
      $this->redirect('@homepage');

    if($request->getMethod () == sfRequest::POST)
    {
      $params=$request->getPostParameters();

      $form = $this->form = new LoginForm($this->getUser());
      $form->bind($params);
      
      if($form->isValid())
      {
        $this->getUser()->setAuthenticated(true);

        if($form->getValue('remember_me'))
        {
          $user->remember();
        }

        if($request->getReferer())
        {
          $this->redirect($request->getReferer());
        }
        else
        {
          $this->redirect('@homepage');
        }

      }
      else
      {
        $user->setFlash('notice','Oops, you probably entered your password wrong!');
        return sfView::ERROR;
      }
    }
  }
 
  public function executeLogout($request)
  {
    $user=$this->getUser();
    $this->form = $form = new LogoutForm();
    if($request->getMethod () == sfRequest::POST)
    {
        $form->bind($request->getPostParameters());
        if($form->isValid() && $user->isAuthenticated())
        {
            $user->remember(true); // also known as "forget"
            $user->setAuthenticated(false);
            $this->redirect('@root');
            // todo add flash
        }
    }
  }
  public function executePassword($request)
  {
    $user=$this->getUser();
    $this->form = $form = new PasswordForm($user);
    if($request->getMethod () == sfRequest::POST)
    {
      $form->bind($request->getPostParameters());
      if($form->isValid())
      {
        $user->setPassword($form->getValue('password'));
        $user->setAuthenticated(false);
        $user->setFlash('notice','Password changed');
        return $this->redirect('@homepage');
      }
    }
  }

  public function executeSettings($request)
  {
  }
}
