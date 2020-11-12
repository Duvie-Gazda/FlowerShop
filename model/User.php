<?php
class User
{
    protected int $id;

    protected UserRool $rool;

    protected string $logit;

    protected string $password;

    public function __construct(int $id, UserRool $rool, string $logit, string $password)
    {
        $this->id = $id;
        $this->rool = $rool;
        $this->logit = $logit;
        $this->password = $password;
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
     * Get the value of rool
     */
    public function getRool()
    {
        return $this->rool;
    }

    /**
     * Set the value of rool
     *
     * @return  self
     */
    public function setRool($rool)
    {
        $this->rool = $rool;

        return $this;
    }

    /**
     * Get the value of logit
     */
    public function getLogit()
    {
        return $this->logit;
    }

    /**
     * Set the value of logit
     *
     * @return  self
     */
    public function setLogit($logit)
    {
        $this->logit = $logit;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
