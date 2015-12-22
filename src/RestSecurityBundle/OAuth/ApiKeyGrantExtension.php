<?php

// src/Acme/DemoBundle/OAuth/ApiKeyGrantExtension.php

namespace RestSecurityBundle\OAuth;

use Doctrine\Common\Persistence\ObjectRepository;
use FOS\OAuthServerBundle\Storage\GrantExtensionInterface;
use OAuth2\Model\IOAuth2Client;

/**
 * Check if an user can get an access token with an Api Key.
 */
class ApiKeyGrantExtension implements GrantExtensionInterface
{

    private $userRepository;

    /**
     * @param ObjectRepository $userRepository
     */
    public function __construct(ObjectRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /*
     * {@inheritdoc}
     */
    public function checkGrantExtension(IOAuth2Client $client, array $inputData, array $authHeaders)
    {
        $player = $this->userRepository->findOneBy( array("api_key"=>$inputData['api_key']) );

        if ($player) {
            return array(
                'data' => $player
            );
            return true;
        }

        return false;
    }
}