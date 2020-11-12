<?php
class ContactInformation
{
    protected $id;
    protected User $user;
    protected ContactInformationType $contactInformtionType;
    protected $contact;

    public function __construct($id, User $user, ContactInformationType $contactInformtionType, $contact)
    {
        $this->id = $id;
        $this->user = $user;
        $this->contactInformtionType = $contactInformtionType;
        $this->contact = $contact;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of contactInformtionType
     */ 
    public function getContactInformtionType()
    {
        return $this->contactInformtionType;
    }

    /**
     * Set the value of contactInformtionType
     *
     * @return  self
     */ 
    public function setContactInformtionType($contactInformtionType)
    {
        $this->contactInformtionType = $contactInformtionType;

        return $this;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }
}
