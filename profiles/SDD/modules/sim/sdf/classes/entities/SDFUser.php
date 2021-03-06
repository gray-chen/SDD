<?php

class SDFUser extends SDFEntity {

    public function __construct() {
        $this->type = 'user';
        parent::__construct();

        global $user;
        $this->data = $user;
    }

    protected function init() {
        $this->data = new stdClass();
    }

    protected function load($uid) {
        $user = user_load($uid);
        if ($user) {
        	$this->data = $user;
        }

        // TODO throw exception?
    }

    public function getUid() {
        return $this->wrapper->uid->value();
    }

    public function getName() {
        return $this->wrapper->name->value();
    }

    public function setName($value) {
        $this->wrapper->name->set($value);
    }

    public function getEmail() {
        return $this->wrapper->mail->value();
    }

    public function setEmail($value) {
        $this->wrapper->mail->set($value);
    }

    public function getRoles() {
        return $this->wrapper->roles->value();
    }

    public function setRoles(array $roles) {
        $this->wrapper->roles->set($roles);
    }

    public function addRole($rid) {
        $roles = $this->getRoles();
        $roles[] = $rid;
        $this->wrapper->roles->set($roles);
    }

}
