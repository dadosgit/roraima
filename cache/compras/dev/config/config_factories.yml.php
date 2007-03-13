<?php
// auto-generated by sfFactoryConfigHandler
// date: 2007/03/13 13:08:45

  $this->controller = sfController::newInstance(sfConfig::get('sf_factory_controller', 'sfFrontWebController'));
  $this->request = sfRequest::newInstance(sfConfig::get('sf_factory_request', 'sfWebRequest'));
  $this->response = sfResponse::newInstance(sfConfig::get('sf_factory_response', 'sfWebResponse'));
  $this->storage = sfStorage::newInstance(sfConfig::get('sf_factory_storage', 'sfSessionStorage'));
  $this->user = sfUser::newInstance(sfConfig::get('sf_factory_user', 'myUser'));
  $this->controller->initialize($this);
  $this->request->initialize($this, sfConfig::get('sf_factory_request_parameters', NULL), sfConfig::get('sf_factory_request_attributes', array()));
  $this->response->initialize($this, sfConfig::get('sf_factory_response_parameters', NULL));
  $this->storage->initialize($this, sfConfig::get('sf_factory_storage_parameters', array (
  'session_name' => 'symfony',
)));
  $this->user->initialize($this, sfConfig::get('sf_factory_user_parameters', NULL));

  if (sfConfig::get('sf_cache'))
  {
    $this->viewCacheManager = new sfViewCacheManager();
    $this->viewCacheManager->initialize($this, sfConfig::get('sf_factory_view_cache', 'sfFileCache'), sfConfig::get('sf_factory_view_cache_parameters', array (
  'automaticCleaningFactor' => 0,
  'cacheDir' => 'C:\\AppServ\\www\\siga\\cache\\compras\\dev\\template',
)));
 }

