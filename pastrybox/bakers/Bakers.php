<?php

class Bakers
{
    protected $bakers = array();
    protected $years = array();
    
    public function __construct( $config )
    {
        $pathInfo = $this->_objectify( pathinfo( __FILE__ ) );
        
        $here = $pathInfo->dirname;
        
        foreach ( $config->years as $currentYear ) {
            require_once $currentYear . ".php";
            $this->years[ $currentYear ] = $bakers;
            
            foreach ( $bakers as $theBaker ) {
                $this->bakers[ $theBaker[ 'slug' ] ] = $theBaker;
            }
            
        }
        
        asort( $this->bakers );
        arsort( $this->years );
        
        
    }
    
    private static function _objectify( $input )
    {
        if ( is_array( $input ) ) {
            return (object) array_map( __METHOD__, $input );
        } else {
            return $input;
        }
    }
    
    public function get_years()
    {
        return array_keys( $this->years );
    }
    
    public function get_by_year( $year )
    {
        return $this->_objectify( $this->years[ $year ] );
    }

    public function get_by_slug( $slug )
    {
        return $this->_objectify( $this->bakers[ $slug ] );
    }
    
    public function get_all()
    {
        return $this->_objectify( $this->bakers );
    }
    
}