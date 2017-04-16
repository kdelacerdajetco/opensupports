<?php
/**
 * @api {post} /user/logout log out the current user.
 *
 * @apiName log out 
 *
 * @apiGroup User
 *
 * @apiDescription This path log out the current user.
 *
 * @apiPermission Any
 *
 * @apiSuccess {Object} data
 *
 */
class LogoutController extends Controller {
    const PATH = '/logout';
    const METHOD = 'POST';

    public function validations() {
        return [
            'permission' => 'any',
            'requestData' => []
        ];
    }

    public function handler() {
        $session = Session::getInstance();
        $session->closeSession();

        Response::respondSuccess();
    }
}