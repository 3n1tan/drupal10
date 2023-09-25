<?php

/**
 * @files
 * Contains \Drupal\third_module\Controller\ThirdController
 */
namespace Drupal\third_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

use Drupal\Core\Link;
use Drupal\Core\Url;


class ThirdController extends ControllerBase {

    public function third (){
        
        //Link to /block.admin_display
        $url1 = Url::fromRoute('block.admin_display');
        $link1 = Link::fromTextAndUrl(t('Go to block admin page'), $url1);
        $list[] = $link1;


        //Link to /admin.content
        $url2 = Url::fromRoute('system.admin_content');
        $link2 = Link::fromTextAndUrl(t('Go to content admin page'), $url2);
        $list[] = $link2;


        //Link to /entity.user.collection
        $url3 = Url::fromRoute('entity.user.collection');
        $link3 = Link::fromTextAndUrl(t('Go to user admin page'), $url3);
        $list[] = $link3;


        //Link to /homepage
        $url4 = Url::fromRoute('<front>');
        $link4 = Link::fromTextAndUrl(t('Go to front page of drupal'), $url4);
        $list[] = $link4;


        //Link to /external link to BCS
        $url5 = Url::fromUri('https://en.bc.fi/');
        $link_options = [
            'attributes'=> [
                'target'=> '_blank',
                'title' => 'Link to BCS homepage'
            ],
        ];
        $url5->setOptions($link_options);
        $link5 = Link::fromTextAndUrl(t('Go to BCS homepage'), $url5);
        $list[] = $link5;

        //mount the render output
        $output['third_module'] = [
            '#theme' => 'item_list',
            '#items' => $list,
            '#title' => $this->t('Links Example Module Developed for Customer'),
        ];

        return $output;
    }
}