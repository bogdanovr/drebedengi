<?
header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>
<definitions name="ddengi" targetNamespace="urn:ddengi" xmlns:typens="urn:ddengi" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/">
	<message name="deleteAll">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="deleteAllResponse"/>
	<message name="deleteObject">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="id" type="xsd:integer"/>
		<part name="type" type="xsd:string"/>
	</message>
	<message name="deleteObjectResponse">
		<part name="deleteObjectReturn" type="xsd:integer"/>
	</message>
	<message name="getAccessStatus">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getAccessStatusResponse">
		<part name="getAccessStatusReturn" type="xsd:integer"/>
	</message>
	<message name="getAccumList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getAccumListResponse">
		<part name="getAccumListReturn" type="xsd:anyType"/>
	</message>
	<message name="getCheckList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getCheckListResponse">
		<part name="getCheckListReturn" type="xsd:anyType"/>
	</message>
	<message name="getCheckToRecordList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getCheckToRecordListResponse">
		<part name="getCheckToRecordListReturn" type="xsd:anyType"/>
	</message>
	<message name="getBalance">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="params" type="xsd:anyType"/>
	</message>
	<message name="getBalanceResponse">
		<part name="getBalanceReturn" type="xsd:anyType"/>
	</message>
	<message name="getCategoryList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getCategoryListResponse">
		<part name="getCategoryListReturn" type="xsd:anyType"/>
	</message>
	<message name="getChangeList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="revision" type="xsd:string"/>
	</message>
	<message name="getChangeListResponse">
		<part name="getChangeListReturn" type="xsd:anyType"/>
	</message>
	<message name="getCurrencyList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getCurrencyListResponse">
		<part name="getCurrencyListReturn" type="xsd:anyType"/>
	</message>
	<message name="getCurrentRevision">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getCurrentRevisionResponse">
		<part name="getCurrentRevisionReturn" type="xsd:integer"/>
	</message>
	<message name="getExpireDate">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getExpireDateResponse">
		<part name="getExpireDateReturn" type="xsd:string"/>
	</message>
	<message name="getOrderList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getOrderListResponse">
		<part name="getOrderListReturn" type="xsd:anyType"/>
	</message>
	<message name="getPlaceList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getPlaceListResponse">
		<part name="getPlaceListReturn" type="xsd:anyType"/>
	</message>
	<message name="getRecordList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="params" type="xsd:anyType"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getRecordListResponse">
		<part name="getRecordListReturn" type="xsd:anyType"/>
	</message>
	<message name="getRightAccess">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getRightAccessResponse">
		<part name="getRightAccessReturn" type="xsd:string"/>
	</message>
	<message name="getServerSubs">
		<part name="url" type="xsd:string"/>
	</message>
	<message name="getServerSubsResponse">
		<part name="getServerSubsReturn" type="xsd:anyType"/>
	</message>
	<message name="getSourceList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getSourceListResponse">
		<part name="getSourceListReturn" type="xsd:anyType"/>
	</message>
	<message name="getSubscriptionStatus">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getSubscriptionStatusResponse">
		<part name="getSubscriptionStatusReturn" type="xsd:string"/>
	</message>
	<message name="getTagList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="idList" type="xsd:anyType"/>
	</message>
	<message name="getTagListResponse">
		<part name="getTagListReturn" type="xsd:anyType"/>
	</message>
	<message name="getUserIdByLogin">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
	</message>
	<message name="getUserIdByLoginResponse">
		<part name="getUserIdByLoginReturn" type="xsd:string"/>
	</message>
	<message name="parseTextData">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="defPlaceFromId" type="xsd:string"/>
		<part name="defCatId" type="xsd:string"/>
		<part name="defSrcId" type="xsd:string"/>
		<part name="defPlaceToId" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="parseTextDataResponse">
		<part name="parseTextDataReturn" type="xsd:anyType"/>
	</message>
	<message name="parsePushData">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="parsePushDataResponse">
		<part name="parsePushDataReturn" type="xsd:anyType"/>
	</message>
	<message name="setAccumList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:string"/>
	</message>
	<message name="setAccumListResponse">
		<part name="setAccumListReturn" type="xsd:anyType"/>
	</message>
	<message name="setCategoryList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setCategoryListResponse">
		<part name="setCategoryListReturn" type="xsd:anyType"/>
	</message>
	<message name="setCurrencyList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setCurrencyListResponse">
		<part name="setCurrencyListReturn" type="xsd:anyType"/>
	</message>
	<message name="setPaymentTransaction">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="transactionReceipt" type="xsd:string"/>
		<part name="amount" type="xsd:string"/>
	</message>
	<message name="setPaymentTransactionResponse">
		<part name="setPaymentTransactionReturn" type="xsd:string"/>
	</message>
	<message name="setPlaceList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setPlaceListResponse">
		<part name="setPlaceListReturn" type="xsd:anyType"/>
	</message>
	<message name="setCheckList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setCheckListResponse">
		<part name="setCheckListReturn" type="xsd:anyType"/>
	</message>
	<message name="setCheckToRecordList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setCheckToRecordListResponse">
		<part name="setCheckToRecordListReturn" type="xsd:anyType"/>
	</message>
	<message name="setRecordList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setRecordListResponse">
		<part name="setRecordListReturn" type="xsd:anyType"/>
	</message>
	<message name="setSourceList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setSourceListResponse">
		<part name="setSourceListReturn" type="xsd:anyType"/>
	</message>
	<message name="setTagList">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="pass" type="xsd:string"/>
		<part name="list" type="xsd:anyType"/>
	</message>
	<message name="setTagListResponse">
		<part name="setTagListReturn" type="xsd:anyType"/>
	</message>
	<message name="userRegister">
		<part name="apiId" type="xsd:string"/>
		<part name="login" type="xsd:string"/>
		<part name="name" type="xsd:string"/>
		<part name="lang" type="xsd:string"/>
	</message>
	<message name="userRegisterResponse">
		<part name="userRegisterReturn" type="xsd:string"/>
	</message>
	<portType name="SoapPortType">
		<documentation>
			drebedengi.ru web-service description; In this document term "waste" means expense.
		</documentation>
		<operation name="deleteAll">
			<documentation>
				Delete all data (transactions, waste category, income source, place list, currency and tags; Used for synchronization in case of the conflicts; Returns void if success, or throws SoapFault exception;
			</documentation>
			<input message="typens:deleteAll"/>
			<output message="typens:deleteAllResponse"/>
		</operation>
		<operation name="deleteObject">
			<documentation>
				Delete any object; [id] => ID of the object to delete; [type] => The type of the object, must be one of: 'waste' 'income' 'move' 'change' 'object' 'currency' 'tag' 'accum'; 'object' is waste category, income source or place; If 'id' identifies 'move' or 'change', both records will be deleted on the server; Returns 1 on success; if an error accures - generates SoapFault message; if there is other object connected to this ID - delete them first;
			</documentation>
			<input message="typens:deleteObject"/>
			<output message="typens:deleteObjectResponse"/>
		</operation>
		<operation name="getAccessStatus">
			<documentation>
				Get current payment status; Returns 1 if Ok, throw SoapFault otherwise.
			</documentation>
			<input message="typens:getAccessStatus"/>
			<output message="typens:getAccessStatusResponse"/>
		</operation>
		<operation name="getAccumList">
			<documentation>
				Gets list of purchases (accums); For purchase list logic is only needed fields 'id, name, sum_need, sum_currency_id, user_id, is_family, created, comment, priority, order_id', other fields is for accum logic and should not be changed; ; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getAccumList"/>
			<output message="typens:getAccumListResponse"/>
		</operation>
		<operation name="getCheckList">
			<documentation>
				Gets list of checks; Only QR checks is synced; Return array of arrays: [id] => Internal check ID; [ext] => qr-url; [state] => the state of qr check process; [qr_sum] => the sum of check from QR; [qr_date] => the date of check from QR; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getCheckList"/>
			<output message="typens:getCheckListResponse"/>
		</operation>
		<operation name="getCheckToRecordList">
			<documentation>
				Gets list of check to record link; Only for QR checks; Return array of arrays: [id] => Internal link ID; [check_id] => ID of the check; [record_id] => ID of the record; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getCheckToRecordList"/>
			<output message="typens:getCheckToRecordListResponse"/>
		</operation>
		<operation name="getBalance">
			<documentation>
				Retrievs balance list (array of arrays) grouped by places; [params] => array of parameters: 'restDate' [YYYY-MM-DD (NOW default)] - rests will be retrieved relative to this value; 'is_with_accum' [true|false (default)] - If true, the the accumulation will be subtracted; 'is_with_duty' [true|false (default)] - If true, duties will be subtracted;
			</documentation>
			<input message="typens:getBalance"/>
			<output message="typens:getBalanceResponse"/>
		</operation>
		<operation name="getCategoryList">
			<documentation>
				Retrievs waste category list (array of arrays): [id] => Internal category ID; [parent_id] => For tree structure; [budget_family_id] => User family ID (for multiuser mode); [type] => Type of object, 3 - waste category; [name] => Category name given by user; [is_hidden] => is category hidden in user interface; [sort] => User sort of category tree; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getCategoryList"/>
			<output message="typens:getCategoryListResponse"/>
		</operation>
		<operation name="getChangeList">
			<documentation>
				Get all changes (array of arrays) from server relative to given revision: [revision] => the revision of the change, [action_id] => the action of the change '1' - add, '2' - update, '3' - delete'; [object_type_id] => type of the object changed '1' - any record (transction), '2' - income source, '3' - waste category, '4' - place, '5' - currency, '6' - budget_tags, '7' - budget_accum, '8' - budget_accum_order; [object_id] => ID of the object for subsequent calls getRecordList, getCategoryList etc; [date] => the date of the change; Parameter [revision] => int8 number, usually saved on the client from last successfull sync.
			</documentation>
			<input message="typens:getChangeList"/>
			<output message="typens:getChangeListResponse"/>
		</operation>
		<operation name="getCurrencyList">
			<documentation>
				Retrievs currency list (array of arrays) with codes and courses: [id] => Internal currency ID; [name] => Currency name, given by user; [course] => current course from sbrf(dot)ru; [code] => International currency code (for course autoupdating); [family_id] => User family ID (for multiuser mode); [is_default] => is default currency# There should be only one default currency; [is_autoupdate] => autoupdate course once per day, from sbrf(dot)ru; [is_hidden] => is currency hidden in user interface; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getCurrencyList"/>
			<output message="typens:getCurrencyListResponse"/>
		</operation>
		<operation name="getCurrentRevision">
			<documentation>
				Get current server revision number.
			</documentation>
			<input message="typens:getCurrentRevision"/>
			<output message="typens:getCurrentRevisionResponse"/>
		</operation>
		<operation name="getExpireDate">
			<documentation>
				Get expire date of active subscription (payed until) for the user - [YYYY-MM-DD]; If there is no active subscription return 0; If an error accur return -1;
			</documentation>
			<input message="typens:getExpireDate"/>
			<output message="typens:getExpireDateResponse"/>
		</operation>
		<operation name="getOrderList">
			<documentation>
				Gets list of orders for purchases; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getOrderList"/>
			<output message="typens:getOrderListResponse"/>
		</operation>
		<operation name="getPlaceList">
			<documentation>
				Retrievs place list (array of arrays): [id] => Internal place ID; [budget_family_id] => User family ID (for multiuser mode); [type] => Type of object, 4 - places; [name] => Place name given by user; [is_hidden] => is place hidden in user interface; [is_autohide] => debts will auto hide on null balance; [is_for_duty] => Internal place for duty logic, Auto created while user adds "Waste or income duty"; [sort] => User sort of place list; [purse_of_nuid] => Not empty if place is purse of user# The value is internal user ID; [icon_id] => Place icon ID from http://www(dot)drebedengi(dot)ru/img/pl[icon_id](dot)gif; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization; There is may be empty response, if user access level is limited;
			</documentation>
			<input message="typens:getPlaceList"/>
			<output message="typens:getPlaceListResponse"/>
		</operation>
		<operation name="getRecordList">
			<documentation>
				Retrievs record list (array of arrays) or report table by parameters; [params] => array of following parameters: 'is_report' [true|false (no default)] - retrievs data for report only or full records (waste, incomes, moves, changes) for export; 'relative_date' [YYYY-MM-DD (NOW by default)] - all data will be retrieved relative to this value, according to 'r_period' value; 'period_to', 'period_from' [YYYY-MM-DD] - custom period, if 'r_period' = 0; 'is_show_duty' [true(default)|false] - whether or not include duty record; 'r_period' [custom period = 0, this month = 1, today = 7, last month = 2, this quart = 3, this year = 4, last year = 5, all time = 6, last 20 record = 8 (default)] - period for which data will be obtained; 'r_what' [income = 2, waste = 3 (default), move = 4, change = 5, all types = 6] - type of data you want to get; 'r_who' [0 (default) - all users, int8 = user ID] - The data of the user to obtain, in the case of multiplayer mode; 'r_how' [show record list by detail = 1 (default), group incomes by source = 2, group wastes by category = 3] - Values 2 and 3 are for 'report' mode only# How to group the result record list; 'r_middle' [No average = 0 (default), Average monthly = 2592000, Average weekly = 604800, Averaged over days = 86400] - How to average the data, if r_how = 2 or 3; 'r_currency' [Original currency = 0 (default), int8 = currency ID] - Convert or not in to given currency; 'r_is_place', 'r_is_tag', 'r_is_category' [Include all = 0 (default), Include only selected = 1, All except selected = 2] - Exclude or include 'r_place', 'r_tag' or 'r_category' respectively; 'r_place', 'r_tag', 'r_category' [Array] - Array of numeric values for place ID, tag ID or category ID respectively; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getRecordList"/>
			<output message="typens:getRecordListResponse"/>
		</operation>
		<operation name="getRightAccess">
			<documentation>
				Get user right access for multi user mode; Returns 0 - full access, 1 - limited access; For limited access it is neccessary to use getBalance method to display user balance in the application; In this case local transactions must simple increment balance, but not compute that as sum of all transactions;
			</documentation>
			<input message="typens:getRightAccess"/>
			<output message="typens:getRightAccessResponse"/>
		</operation>
		<operation name="getServerSubs">
			<documentation>
				Internal method; Don't use it;
			</documentation>
			<input message="typens:getServerSubs"/>
			<output message="typens:getServerSubsResponse"/>
		</operation>
		<operation name="getSourceList">
			<documentation>
				Retrievs income source list (array of arrays): [id] => Internal source ID; [parent_id] => For tree structure; [budget_family_id] => User family ID (for multiuser mode); [type] => Type of object, 2 - income source; [name] => Source name given by user; [is_hidden] => is income hidden in user interface; [sort] => User sort of source tree; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getSourceList"/>
			<output message="typens:getSourceListResponse"/>
		</operation>
		<operation name="getSubscriptionStatus">
			<documentation>
				Get Premium subscription status; returns 1 - Premium active, 0 - otherwise;
			</documentation>
			<input message="typens:getSubscriptionStatus"/>
			<output message="typens:getSubscriptionStatusResponse"/>
		</operation>
		<operation name="getTagList">
			<documentation>
				Retrievs tag list (array of arrays): [id] => Internal tag ID; [family_id] => User family ID (for multiuser mode); [name] => Tag name given by user; [is_hidden] => is tag hidden in user interface; [is_family] => is tag visible for all family user, or user only; [sort] => User sort of tag list; [parent_id] => For tree view; If parameter [idList] is given, it will be treat as ID list of objects to retrieve# this is used for synchronization;
			</documentation>
			<input message="typens:getTagList"/>
			<output message="typens:getTagListResponse"/>
		</operation>
		<operation name="getUserIdByLogin">
			<documentation>
				Get internal user ID by login; For multi user mode, this value contained in 'purse_of_nuid' field of the current user;
			</documentation>
			<input message="typens:getUserIdByLogin"/>
			<output message="typens:getUserIdByLoginResponse"/>
		</operation>
		<operation name="parseTextData">
			<documentation>
				Try to parse text data as records; [def..] default field values if no rules detected; [list] => array (indexes must be 0,1,2...N) of strings to parse (UTF8); Returns the array of array - data for records;
			</documentation>
			<input message="typens:parseTextData"/>
			<output message="typens:parseTextDataResponse"/>
		</operation>
		<operation name="parsePushData">
			<documentation>
				Try to parse text data as records; [def..] default field values if no rules detected; [list] => array (indexes must be 0,1,2...N) of strings to parse (UTF8); Returns the array of array - data for records;
			</documentation>
			<input message="typens:parsePushData"/>
			<output message="typens:parsePushDataResponse"/>
		</operation>
		<operation name="setAccumList">
			<documentation>
				Insert or update accum list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getAccumList description for other detail; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setAccumList"/>
			<output message="typens:setAccumListResponse"/>
		</operation>
		<operation name="setCategoryList">
			<documentation>
				Insert or update waste category list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getCategoryList description for other detail; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setCategoryList"/>
			<output message="typens:setCategoryListResponse"/>
		</operation>
		<operation name="setCurrencyList">
			<documentation>
				Insert or update currency list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getCurrencyList description for other detail; Returns the array of server IDs, successfully changed; If 'is_default' flag set to another currency, then previos updated too and sent in return array; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setCurrencyList"/>
			<output message="typens:setCurrencyListResponse"/>
		</operation>
		<operation name="setPaymentTransaction">
			<documentation>
				Approve payment from Apple; [transactionReceipt] - is a signed ricept string returned from apple while purchasing, this shoud be base64 decoded; [amount] - the sum amount of the purchase, in USD cents; Return expire date of the subscription, @see getExpireDate for the description of the return values;
			</documentation>
			<input message="typens:setPaymentTransaction"/>
			<output message="typens:setPaymentTransactionResponse"/>
		</operation>
		<operation name="setPlaceList">
			<documentation>
				Insert or update place list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getPlaceList description for other detail; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setPlaceList"/>
			<output message="typens:setPlaceListResponse"/>
		</operation>
		<operation name="setCheckList">
			<documentation>
				Insert or update check list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the check# If client ID is present - try to insert new check, and return server2client correspondence in the result array# If server_id is present - try to update existing check, @param string $apiId;
			</documentation>
			<input message="typens:setCheckList"/>
			<output message="typens:setCheckListResponse"/>
		</operation>
		<operation name="setCheckToRecordList">
			<documentation>
				Insert or update check to record link list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the check# If client ID is present - try to insert new check, and return server2client correspondence in the result array# If server_id is present - try to update existing check, @param string $apiId;
			</documentation>
			<input message="typens:setCheckToRecordList"/>
			<output message="typens:setCheckToRecordListResponse"/>
		</operation>
		<operation name="setRecordList">
			<documentation>
				Insert or update record list; [list] => array (indexes must be 0,1,2...N) of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record; 'server_move_id' or 'client_move_id' [int8] - for "move" operations only, to identify second part of move# The value must point to first part 'server_id' or 'client_id' respectively; 'server_change_id' or 'client_change_id' [int8] - for "currency change" operations only, to identify second part of change# The value must point to first part 'server_id' or 'client_id' respectively; 'place_id' [int8] - place ID, of which the record; 'budget_object_id' [int8] - object ID of which the record: category ID for waste, source ID for incomes, place ID for moves and currency changes; 'sum' [int8] - absolute value of sum (hundredths); 'operation_date' [YYYY-MM-DD HH:mm:SS] - transaction date; 'comment' [UTF8 text] - the comment of the record, 2048 chars max length; 'currency_id' [int8] - currency ID of the record; 'is_duty' [true|false] - not used; 'operation_type' [income = 2, waste = 3 (default), move = 4, change = 5] - transaction type; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setRecordList"/>
			<output message="typens:setRecordListResponse"/>
		</operation>
		<operation name="setSourceList">
			<documentation>
				Insert or update income source list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getSourceList description for other detail; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setSourceList"/>
			<output message="typens:setSourceListResponse"/>
		</operation>
		<operation name="setTagList">
			<documentation>
				Insert or update tag list; [list] => array of arrays: 'server_id' or 'client_id' [int8] - server or client ID of the record# If client ID is present - try to insert new record, and return server2client correspondence in the result array# If server_id is present - try to update existing record, @see getTagList description for other detail; Returns the array of server IDs, successfully changed; The client MUST save server IDs corresponded to client IDs, for subsequent 'update' and 'delete' calls;
			</documentation>
			<input message="typens:setTagList"/>
			<output message="typens:setTagListResponse"/>
		</operation>
		<operation name="userRegister">
			<documentation>
				Reqister new user; Return user password on successfully register; If an error accur return -1 (such email already exist), -2 (register not allowed), -3 (email incorrect), -4 (other error); [lang] - 'en' or 'ru';
			</documentation>
			<input message="typens:userRegister"/>
			<output message="typens:userRegisterResponse"/>
		</operation>
	</portType>
	<binding name="SoapBinding" type="typens:SoapPortType">
		<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
		<operation name="deleteAll">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="deleteObject">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getAccessStatus">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getAccumList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getCheckList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getCheckToRecordList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getBalance">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getCategoryList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getChangeList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getCurrencyList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getCurrentRevision">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getExpireDate">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getOrderList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getPlaceList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getRecordList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getRightAccess">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getServerSubs">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getSourceList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getSubscriptionStatus">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getTagList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="getUserIdByLogin">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="parseTextData">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="parsePushData">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setAccumList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setCategoryList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setCurrencyList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setPaymentTransaction">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setPlaceList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setCheckList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setCheckToRecordList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setRecordList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setSourceList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="setTagList">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
		<operation name="userRegister">
			<soap:operation soapAction="urn:SoapAction"/>
			<input>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</input>
			<output>
				<soap:body namespace="urn:ddengi" use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
			</output>
		</operation>
	</binding>
	<service name="ddengiService">
		<port name="SoapPort" binding="typens:SoapBinding">
			<soap:address location="https://www.drebedengi.ru/soap/"/>
		</port>
	</service>
</definitions>
