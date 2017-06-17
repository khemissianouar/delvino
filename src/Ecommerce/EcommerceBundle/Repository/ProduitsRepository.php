<?php

namespace Ecommerce\EcommerceBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitsRepository extends EntityRepository
{
  public function findArray($array)
  {
      $qb = $this->createQueryBuilder('u')
              ->Select('u')
              ->Where('u.id IN (:array)')
              ->setParameter('array', $array);
      return $qb->getQuery()->getResult();
  }
  
  public function bytype($type)
     {
         $qb = $this->createQueryBuilder('u')
                 ->select('u')
                 ->where('u.type = :type')
                 ->orderBy('u.id')
                 ->setParameter('type', $type);
         return $qb->getQuery()->getResult();
     }
     public function byregion($region)
        {
            $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.region = :region')
                    ->orderBy('u.id')
                    ->setParameter('region', $region);
            return $qb->getQuery()->getResult();
        }
        public function bycouleur($couleur)
           {
               $qb = $this->createQueryBuilder('u')
                       ->select('u')
                       ->where('u.couleur = :couleur')
                       ->orderBy('u.id')
                       ->setParameter('couleur', $couleur);
               return $qb->getQuery()->getResult();
           }
           public function bygout($gout)
              {
                  $qb = $this->createQueryBuilder('u')
                          ->select('u')
                          ->where('u.gout = :gout')
                          ->orderBy('u.id')
                          ->setParameter('gout', $gout);
                  return $qb->getQuery()->getResult();

 }
 public function byalcool($alcool)
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.alcool = :alcool')
                ->orderBy('u.id')
                ->setParameter('alcool', $alcool);
        return $qb->getQuery()->getResult();

}
}