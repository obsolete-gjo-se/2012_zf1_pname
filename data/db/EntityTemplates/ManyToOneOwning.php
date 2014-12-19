<?php
namespace Pname\Entity;

use Doctrine\ORM\Mapping as ORM;

class ManyToOneOwing extends EntityBase {
     
    /**
     *  Casace: {"persist", "remove", "merge", "detach", "all"}
     */
    
    /** 
     * @ManyToOne(
     *     targetEntity="",
     *     cascade={"all"},
     *     fetch=LAZY | EAGER,
     *     inversedBy="")
     * @JoinColumn(
     *     name="fieldname_id", 
     *     referencedColumnName="id",
     *     unique=true,
     *     nullable=true,
     *     onDelete)
     */ protected $ManyToOneOnwing;
    
}
