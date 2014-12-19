<?php
namespace Pname\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class ManyToOneInverse extends EntityBase {
     

    
    /** 
     * @OneToMany(
     *     targetEntity="",
     *     cascade={"all"},
     *     fetch=LAZY | EXTRA_LAZY | EAGER,
     *     orphanRemoval=true,
     *     indexBy="",
     *     mappedBy="")
     * @JoinColumn(
     *     name="fieldname_id", 
     *     referencedColumnName="id",
     *     unique=true,
     *     nullable=true,
     *     onDelete)
     */ protected $ManyToOneInverse;
    
    public function __construct(){
        $this->groups = new ArrayCollection();
    }
    
    // oder
    public function __construct(array $values = null){
        if (!empty($values)) {
            $this->fromArray($values);
        }
    }
    
}
