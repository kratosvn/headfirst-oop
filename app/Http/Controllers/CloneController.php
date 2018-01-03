<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/24/2018
 * Time: 11:33 PM
 */

namespace App\Http\Controllers;

require_once '../app/Service/SimpleHtmlDom.php';
use App\Model\ViecBonusUser;

class CloneController
{
    public function index()
    {
        for ($i = 1; $i < 1928; $i++) {
            $html = file_get_html("http://mail.viecbonus.com/users?page=" . $i);
            $email = "";
            $count = 0;
            foreach ($html->find('td') as $element) {
                if (empty($email) && filter_var($element->text(), FILTER_VALIDATE_EMAIL)) {
                    $email = $element->text();
                    continue;
                }
                if (!empty($email)) {
                    $count += 1;
                    $name = $element->text();
                    $viecBonusUser = new ViecBonusUser();
                    $viecBonusUser->email = "$email";
                    $viecBonusUser->name = "$name";
                    $viecBonusUser->save();
                    $email = '';
                }
                if ($count == 10) {
                    break;
                }
            }
        }
    }
}