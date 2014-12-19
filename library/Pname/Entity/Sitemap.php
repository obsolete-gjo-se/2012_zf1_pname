<?php
namespace Pname\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass="Pname\Entity\Repository\SitemapRepository",
 *     readOnly=true)
 * @ORM\Table(
 *     name="sitemap")
 */
class Sitemap extends EntityBase {
     
    /**
     *  @ORM\Id
     *  @ORM\GeneratedValue(
     *      strategy="IDENTITY")
     *  @ORM\Column(
     *      name="id",
     *      type="integer")
     */ protected $id;
    
    /**
     * @ORM\Column(
     *     name="titel",
     *     type="string",
     *     length=255,
     *     unique=true)
     */ protected $titel;
    
    /**
     * @ORM\Column(
     *     name="language",
     *     type="string",
     *     length=2)
     */ protected $language;
    
    /**
     * @ORM\Column(
     *     name="keyword",
     *     type="string",
     *     length=255,
     *     unique=true)
     */ protected $keyword;
    
    /**
     * @ORM\Column(
     *     name="descr",
     *     type="string",
     *     length=255,
     *     unique=true)
     */ protected $descr;

    /**
     * @ORM\Column(
     *     name="robots",
     *     type="string",
     *     length=20)
     */ protected $robots;
    
    /**
     * @ORM\Column(
     *     name="directory",
     *     type="string",
     *     length=100)
     */ protected $directory;
    
    /**
     * @ORM\Column(
     *     name="name",
     *     type="string",
     *     length=50)
     */ protected $name;
    
    /**
     * @ORM\Column(
     *     name="type",
     *     type="string",
     *     length=4)
     */ protected $type;
    
    /**
     * @ORM\Column(
     *     name="path",
     *     type="string",
     *     length=200)
     */ protected $path;
    
    /**
     * @ORM\Column(
     *     name="landingpage",
     *     type="boolean",
     *     nullable=true)
     */ protected $landingpage;
    
    /**
     * @ORM\Column(
     *     name="onlymember",
     *     type="boolean",
     *     nullable=true)
     */ protected $onlymember;
    
    /**
     * @ORM\Column(
     *     name="onlypayed",
     *     type="boolean",
     *     nullable=true)
     */ protected $onlypayed;
}
														

