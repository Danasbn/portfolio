<?php

namespace Danasbn;

class Plugin
{


    public function __construct()
    {
        add_action('init',[$this,'createCustomPostTypes']);
    }
    public function createCustomPostTypes()
    {
        
        register_post_type(

            'cvs', // Name of CPT
            [
                'label' =>'Curriculum Vitae',
                'public' => true, // CPT will be editable from back office
                'hierarchical' => false,
                'show_in_rest' => true, // CPT available in wp REST api
                'menu_icon'=> 'dashicons-format-aside',
                'supports' =>[
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt'
                ]
                ],
            );
            register_post_type(
            'website', 
            [
                'label' => 'Sites réalisés',
                'public' => true, 
                'hierarchical' => false,
                'show_in_rest' => true, 
                'menu_icon' => 'dashicons-welcome-view-site',
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'author'
                ]
            ]
            
            );
        $this->flushRoutes();
    }
// Pour V2 si inscription pour contact
/*    public function createCustomRoles()
    {
        add_role('recruteurs', 'Recruteurs');
    }
    public function deleteCustomRoles()
    {
        remove_role('recruteurs');
    }

*/
    /**
     * Called during plugin activation
     *
     * @return void
     */
 /*   public function activate()
    {
       $this->createCustomRoles();
       
        
    }
*/
    /**
     * Called during plugin deactivation
     *
     * @return void
     */
 /*   public function deactivate()
    {
        $this->deleteCustomRoles();
        
        
    }
  */
    public function flushRoutes()
    {
        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }
}
