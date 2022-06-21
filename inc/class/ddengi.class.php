<?
class ddengi {
    function getUserIdByLogin($apiId,$login,$pass) {
	error_log("[dd] New connection.");
	global $opts;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id from users where name=?s and pass=?s",$login,$pass);
	if($result['id']>0) {
	    return $result['id'];
	} else {
	    if($apiId==='wp_api') {
		return new SoapFault("1", "Login failed");
	    } else {
		// сначала андроид юзал 4 ретурн
		return new SoapFault("1", "Login failed");
	    }
	}
    }

    function getAccessStatus($apiId,$login,$pass) {
	if($apiId==='vandr_api') {
	    return new SoapFault("87", "999");
	} elseif($apiId==='wp_api') {
	    return "1";
	} else {
	    return "1";
	}
    }
    
    function getSubscriptionStatus($apiId,$login,$pass) {
	return "1";
    }

    function getExpireDate($apiId,$login,$pass) {
	return "2021-12-06";
    }

    function getCurrentRevision($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	$result=$db->getOne("select a.revision from changes a left join users b on a.user_nuid=b.id where b.name=?s and b.pass=?s order by a.revision desc limit 1",$login,$pass);
	return $result;
    }

    function parseTextData($apiId,$login,$pass) {
	if($apiId==='vandr_api') {
	    return "1";
	} elseif($apiId==='wp_api') {
	    return "1";
	} else {
	    return "1";
	}
    }
    
    function getChangeList($apiId,$login,$pass,$revision) {
	global $opts;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id,family_id from users where name=?s and pass=?s",$login,$pass);
	$id=$result['id'];
	$family_id=$result['family_id'];
	if($id > 0) {
	    $result=$db->getAll("SELECT revision,action_id,object_type_id,object_id,date from changes where user_nuid=?i and family_id=?i and revision > ?i",$id,$family_id,$revision);
	    return $result;
	}
    }

    function getAccumList($apiId,$login,$pass,$idlist) {
	$accumlist=array();
	return $accumlist;
    }

    function getCheckList($apiId,$login,$pass, $idlist) {
	global $opts;
	$db = new SafeMySQL($opts);
	return $db->getAll("SELECT * from checks");
    }

    function getCheckToRecordList($apiId,$login,$pass,$idlist) {
	global $opts;
	$db = new SafeMySQL($opts);
	return $db->getAll("SELECT * from checktorecord");
    }

    function getRightAccess($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	return $db->getOne("SELECT rightaccess from users where name=?s and pass=?s",$login,$pass);
    }

    function getOrderList($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	    return $db->getAll("SELECT a.* from orders a left join users b on a.user_id=b.id and b.name=?s and b.pass=?s",$login,$pass);
    }

    function getRecordList($apiId,$login,$pass,$params,$idlist) {
	// PARAMS !!!
	global $opts;
	$db = new SafeMySQL($opts);
	$out=array();
	if($idlist) {
	    foreach($idlist as $id) {
		if($apiId==="wp_api") {
		    $result=$db->getRow("select a.id,a.budget_object_id,a.user_nuid,a.budget_family_id,a.is_duty,a.operation_date,a.comment,a.currency_id,a.group_id,a.operation_type,a.place_id,a.sum from records a left join users b on a.user_nuid=b.id where b.name=?s and b.pass=?s and a.id=?i",$login,$pass,$id);
		} else {
		    $result=$db->getRow("select a.* from records a left join users b on a.user_nuid=b.id where b.name=?s and b.pass=?s and a.id=?i",$login,$pass,$id);
		}
		$result['operation_type']=(int)$result['operation_type'];
		$out[$result['id']]=$result;
	    }
	} else {
	    if($apiId==="wp_api") {
		$result=$db->getAll("select a.id,a.budget_object_id,a.user_nuid,a.budget_family_id,a.is_duty,a.operation_date,a.comment,a.currency_id,a.group_id,a.operation_type,a.place_id,a.sum from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s",$login,$pass);
	    } else {
		$result=$db->getAll("select a.* from records a left join users b on a.user_nuid=b.id where b.name=?s and b.pass=?s",$login,$pass);
	    }
	    foreach($result as $key => $value) {
		$value['operation_type']=(int)$value['operation_type'];
		$out[$value['id']]=$value;
	    }
	}
	return $out;
    }

    function setRecordList($apiId,$login,$pass,$list) {
	global $opts;
	$return=array();
	$i=0;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id,family_id from users where name=?s and pass=?s",$login,$pass);
	$id=$result['id'];
	$family_id=$result['family_id'];
	if($id > 0 && $family_id > 0) {
	  foreach($list as $data) {
	    if(!isset($data['server_move_id'])) { $data['server_move_id']=NULL; }
	    if(!isset($data['server_change_id'])) { $data['server_change_id']=NULL; }
	    if(!isset($data['comment'])) { $data['comment']=NULL; }
	    if($data['is_duty'] === FALSE) { $data['is_duty']='f'; } else { $data['is_duty']='t'; }
	    if(isset($data['server_id'])) {
		$db->query("INSERT INTO changes SET user_nuid=?i,family_id=?i,action_id=?i,object_type_id=?i,object_id=?i",$id,$family_id,'2','1',$data['server_id']);
		$db->query("UPDATE records set user_nuid=?i,budget_family_id=?i,is_duty=?s,budget_object_id=?i,operation_type=?i,place_id=?i,operation_date=?s,comment=?s,currency_id=?i,sum=?s where id=?i",$id,$family_id,$data['is_duty'],$data['budget_object_id'],$data['operation_type'],$data['place_id'],$data['operation_date'],$data['comment'],$data['currency_id'],$data['sum'],$data['server_id']);
		$return[$i]['server_id']=$data['server_id'];
		$return[$i]['status']='updated';
	    } else {
		$db->query("INSERT into records set user_nuid=?i,budget_family_id=?i,is_duty=?s,budget_object_id=?i,operation_type=?i,place_id=?i,operation_date=?s,comment=?s,currency_id=?i,sum=?s",$id,$family_id,$data['is_duty'],$data['budget_object_id'],$data['operation_type'],$data['place_id'],$data['operation_date'],$data['comment'],$data['currency_id'],$data['sum']);
		$lastid=$db->insertId();
		if($lastid>0) {
		    if(isset($data['operation_type']) && $data['operation_type']=='4') {
			if($data['sum']>0) {
			    $server_move_id=$lastid+1;
			} else {
			    $server_move_id=$lastid-1;
			}
			$db->query("UPDATE records SET server_move_id=?i where id=?s",$server_move_id,$lastid);
		    }
		    if(isset($data['operation_type']) && $data['operation_type']=='5') {
			if($data['sum']>0) {
			    $server_change_id=$lastid+1;
			} else {
			    $server_change_id=$lastid-1;
			}
			$db->query("UPDATE records SET server_change_id=?i where id=?s",$server_change_id,$lastid);
		    }
		    $db->query("INSERT INTO changes SET user_nuid=?i,family_id=?i,action_id=?i,object_type_id=?i,object_id=?i",$id,$family_id,'1','1',$lastid);
		    $return[$i]['server_id']=$lastid;
		    $return[$i]['status']='inserted';
		    $return[$i]['client_id']=$data['client_id'];
		}
	    }
	    $i++;
	  }
	} else {
	    return new SoapFault("1", "Access denied");
	}
	return $return;
    }

    function getCurrencyList($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	    return $db->getAll("select a.* from currencies a left join users b on a.family_id=b.family_id where b.name=?s and b.pass=?s",$login,$pass);
    }

    function getCategoryList($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	return $db->getAll("select a.* from categories a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s",$login,$pass);
    }

    function getSourceList($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	return $db->getAll("select a.* from sources a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s",$login,$pass);
    }

    function getTagList($apiId,$login,$pass) {
	global $opts;
	$db = new SafeMySQL($opts);
	    return $db->getAll("select a.* from tags a left join users b on a.user_id=b.id where b.name=?s and b.pass=?s",$login,$pass);
    }

    function getPlaceList($apiId,$login,$pass,$idlist) {
	// IDLIST!!
	global $opts;
	$db = new SafeMySQL($opts);
	if(($apiId==="wp_api")||($apiId==="ktt_api")) {
	    return $db->getAll("select a.id,a.budget_family_id,a.type,a.name,a.is_hidden,a.is_for_duty,a.sort,a.purse_of_nuid,a.icon_id,a.is_autohide,'-1' as parent_id from places a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and ( a.purse_of_nuid=b.id or a.purse_of_nuid is NULL ) order by a.sort",$login,$pass);
	} else {
	    return $db->getAll("select a.* from places a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and ( a.purse_of_nuid=b.id or a.purse_of_nuid is NULL ) order by a.sort",$login,$pass);
	}
    }

    function setPlaceList($apiId,$login,$pass,$list) {
	global $opts;
	$return=array();
	$i=0;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id,family_id from users where name=?s and pass=?s",$login,$pass);
	$id=$result['id'];
	$family_id=$result['family_id'];
	if($id > 0 && $family_id > 0) {
	    foreach($list as $place) {
		if($place['is_for_duty'] === FALSE) { $place['is_for_duty']='f'; } else { $place['is_for_duty']='t'; }
		if($place['is_hidden'] === FALSE) { $place['is_hidden']='f'; } else { $place['is_hidden']='t'; }
		if(!isset($place['type'])) { $place['type']=4;}
		if(isset($place['client_id'])) {
		    $db->query("INSERT INTO places set budget_family_id=?s,type=?s,name=?s,is_for_duty=?s,is_hidden=?s",$family_id,$place['type'],$place['name'],$place['is_for_duty'],$place['is_hidden']);
		    $lastid=$db->insertId();
		    $db->query("INSERT INTO changes SET user_nuid=?i,family_id=?i,action_id=?i,object_type_id=?i,object_id=?i",$id,$family_id,'1','2',$lastid);
		    $return[$i]['server_id']=$lastid;
		    $return[$i]['status']='inserted';
		    $return[$i]['client_id']=$place['client_id'];
		} else {
		    $db->query("UPDATE places set budget_family_id=?s,type=?s,name=?s,is_for_duty=?s,is_hidden=?s where id=?i",$family_id,$place['type'],$place['name'],$place['is_for_duty'],$place['is_hidden'],$place['server_id']);
		    $return[$i]['status']='updated';
		    $return[$i]['server_id']=$place['server_id'];
		}
		$i++;
	    }
	}
	return $return;
    }

    function getBalance($apiId,$login,$pass,$params) {
	global $opts;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id,family_id from users where name=?s and pass=?s",$login,$pass);
	$id=$result['id'];
	$family_id=$result['family_id'];
	if($id > 0 && $family_id > 0) {
	    if(($apiId==="wp_api")||($apiId==="ktt_api")) {
		return $db->getAll("select sum(sum) as sum,currency_id,place_id,is_for_duty,is_credit_card,b.name as place_name,purse_of_nuid,c.name as currency_name,is_default as currency_default from records a left join places b on a.place_id=b.id left join currencies c on a.currency_id=c.id where purse_of_nuid=?s or purse_of_nuid is NULL group by place_id,currency_id order by sort",$id);
	    } else {
		return $db->getAll("select sum(sum) as sum,currency_id,place_id,is_for_duty,is_credit_card,b.name as place_name,purse_of_nuid,c.name as currency_name,is_default as currency_default from records a left join places b on a.place_id=b.id left join currencies c on a.currency_id=c.id where family_id=?s group by place_id,currency_id order by sort",$family_id);
	    }
	} else {
	    return new SoapFault("1", "Access denied");
	}
    }

    function deleteObject($apiId,$login,$pass,$id,$type) {
	global $opts;
	$db = new SafeMySQL($opts);
	$result=$db->getRow("SELECT id,family_id from users where name=?s and pass=?s",$login,$pass);
	$userid=$result['id'];
	$family_id=$result['family_id'];
	if($userid > 0 && $family_id > 0 ) {
		if($type==='move') {
		    $delete_too=$db->getOne("select a.id from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and a.server_move_id=?s",$login,$pass,$id);
		    $query=$db->query("delete a from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and (a.id=?s or a.server_move_id=?s)",$login,$pass,$id,$id);
		    $query=$db->query("delete a from changes a left join users b on a.family_id=b.family_id where b.name=?s and b.pass=?s and (a.object_id=?s or a.object_id=?s)",$login,$pass,$id,$delete_too);
		} elseif($type==='change') {
		    $delete_too=$db->getOne("select a.id from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and a.server_change_id=?s",$login,$pass,$id);
		    $query=$db->query("delete a from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and (a.id=?s or a.server_change_id=?s)",$login,$pass,$id,$id);
		    $query=$db->query("delete a from changes a left join users b on a.family_id=b.family_id where b.name=?s and b.pass=?s and (a.object_id=?s or a.object_id=?s)",$login,$pass,$id,$delete_too);
		} else {
		    $query=$db->query("delete a from records a left join users b on a.budget_family_id=b.family_id where b.name=?s and b.pass=?s and a.id=?s",$login,$pass,$id);
		}
	    if($query) {
		$db->query("INSERT INTO changes SET user_nuid=?i,family_id=?i,action_id=?i,object_type_id=?i,object_id=?i",$userid,$family_id,'3','1',$id);
		return "1";
	    } else {
		return new SoapFault("1", "Error occured");
	    }
	} else {
		return new SoapFault("1", "Access denied");
	}
    }

}

?>
