<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 08/05/2016
 * Time: 12:14
 */

namespace AppBundle\MenuProvider;


use Knp\Menu\Provider\MenuProviderInterface;

class MenuProvider implements MenuProviderInterface
{

    /**
     * Retrieves a menu by its name
     *
     * @param string $name
     * @param array $options
     *
     * @return \Knp\Menu\ItemInterface
     * @throws \InvalidArgumentException if the menu does not exists
     */
    public function get($name, array $options = array())
    {

    }

    /**
     * Checks whether a menu exists in this provider
     *
     * @param string $name
     * @param array $options
     *
     * @return boolean
     */
    public function has($name, array $options = array())
    {
        return $name==="produits";
    }
}