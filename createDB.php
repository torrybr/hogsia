<?php
try {
	// Create database named user.db
	$dbh = new PDO("sqlite:./users2.db");

	// CREATE USERS TABLE
	$sql1 = "CREATE TABLE `afo_confinements` (
  `OBJECTID,N,10,0` int(11) DEFAULT NULL,
  `MAPLABELNA,C,160` text,
  `LEGENDTYPE,N,5,0` int(11) DEFAULT NULL,
  `PUBLICVIEW,N,5,0` int(11) DEFAULT NULL,
  `LOCID,N,11,0` bigint(20) DEFAULT NULL,
  `stfacid,N,10,0` int(11) DEFAULT NULL,
  `progid,C,30` int(11) DEFAULT NULL,
  `facName,C,80` text,
  `LocAddress,C,50` text,
  `CityName,C,60` text,
  `State,C,5` text,
  `locZip,C,14` int(11) DEFAULT NULL,
  `countyName,C,35` text,
  `FO,C,1` int(11) DEFAULT NULL,
  `locSupplem,C,50` text,
  `opStatus,C,20` text,
  `StatusStar,D` text,
  `OperatType,C,13` text,
  `ConsPermID,C,20` text,
  `ConsPermDt,D` text,
  `MMPrecdDt,D` text,
  `NPDESExpDt,D` text,
  `BasinInspe,C,3` text,
  `AnimalUnit,N,19,11` double DEFAULT NULL,
  `SwineGrFin,N,10,0` int(11) DEFAULT NULL,
  `SwineWeFin,N,10,0` int(11) DEFAULT NULL,
  `SwineNurse,N,10,0` int(11) DEFAULT NULL,
  `SwineGesBo,N,10,0` int(11) DEFAULT NULL,
  `SwineSowLt,N,10,0` int(11) DEFAULT NULL,
  `SwineGilti,N,10,0` int(11) DEFAULT NULL,
  `CattleDaHl,N,10,0` int(11) DEFAULT NULL,
  `CattleDaJr,N,10,0` int(11) DEFAULT NULL,
  `CattleDaHf,N,10,0` int(11) DEFAULT NULL,
  `CattleBeFn,N,10,0` int(11) DEFAULT NULL,
  `CattleBeFe,N,10,0` int(11) DEFAULT NULL,
  `CattleVeal,N,10,0` int(11) DEFAULT NULL,
  `TurkeyFin,N,10,0` int(11) DEFAULT NULL,
  `TurkeyPlBr,N,10,0` int(11) DEFAULT NULL,
  `ChickenLBr,N,10,0` int(11) DEFAULT NULL,
  `ChickenPul,N,10,0` int(11) DEFAULT NULL,
  `Horses,N,10,0` int(11) DEFAULT NULL,
  `SheepLambs,N,10,0` int(11) DEFAULT NULL,
  `Goats,N,10,0` int(11) DEFAULT NULL,
  `Basin,N,10,0` int(11) DEFAULT NULL,
  `BldgPit,N,10,0` int(11) DEFAULT NULL,
  `BldPitdeep,N,10,0` int(11) DEFAULT NULL,
  `BldPitshal,N,10,0` int(11) DEFAULT NULL,
  `OutConcret,N,10,0` int(11) DEFAULT NULL,
  `OutCncrtCv,N,10,0` int(11) DEFAULT NULL,
  `OutCncrtUn,N,10,0` int(11) DEFAULT NULL,
  `SlurryStor,N,10,0` int(11) DEFAULT NULL,
  `LagoonAero,N,10,0` int(11) DEFAULT NULL,
  `LagoonAnae,N,10,0` int(11) DEFAULT NULL,
  `SandSetLan,N,10,0` int(11) DEFAULT NULL,
  `SetOpenEff,N,10,0` int(11) DEFAULT NULL,
  `SolidSetlg,N,10,0` int(11) DEFAULT NULL,
  `StockpilCv,N,10,0` int(11) DEFAULT NULL,
  `StockpilUn,N,10,0` int(11) DEFAULT NULL,
  `RunoffCntr,N,10,0` int(11) DEFAULT NULL,
  `Wetland,N,10,0` int(11) DEFAULT NULL,
  `ManStOther,N,10,0` int(11) DEFAULT NULL,
  `ATSystem,N,10,0` int(11) DEFAULT NULL,
  `VIB,N,10,0` int(11) DEFAULT NULL,
  `VTA,N,10,0` int(11) DEFAULT NULL,
  `TownshipNa,C,50` text,
  `Tier,C,3` text,
  `Range,C,2` text,
  `rangeDir,C,1` text,
  `Sectn,C,2` text,
  `Latitude,N,9,5` double DEFAULT NULL,
  `Longitude,N,10,5` double DEFAULT NULL,
  `X_Coord,N,8,0` int(11) DEFAULT NULL,
  `Y_Coord,N,9,0` int(11) DEFAULT NULL,
  `Accuracy,N,7,0` int(11) DEFAULT NULL,
  `colMthTxt,C,60` text,
  `refPntTxt,C,60` text,
  `VerifyTxt,C,65` text,
  `collectBy,C,8` text,
  `ColDate,D` text,
  `locComment,C,150` text,
  `Congress,C,2` text,
  `StHouse,C,3` text,
  `StSenate,C,2` text,
  `HUC,C,12` text,
  `Hyperlink,C,254` text)";

	// CREATE IMAGES TABLE
	$status1 = $dbh->exec($sql1);
	

	if($status1 === FALSE){
		print_r($dbh->errorInfo());
		
	}
	
} catch (PDOException $e) {
	/* If you get here it is mostly a permissions issue
	 * or that your path to the database is wrong
	 */
	echo 'Connection failed: ' . $e->getMessage();
	die;
}
