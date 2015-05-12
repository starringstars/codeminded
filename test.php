<?php
/**
 * Created by PhpStorm.
 * User: stars
 * Date: 12/05/15
 * Time: 13:57
 */


  for  ($i = 0 ; $i <= 55; $i++){


      if ($i %3 == 0 && $i > 0){
        echo "Aap";
      }

      if ($i %5 == 0 && $i > 0){
          echo "Noot";
      }


      echo $i .PHP_EOL ;
}



//// sql via sequelpro input
/*

CREATE TABLE `memberAwards` (
`memberAwardId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `memberId` int(11) NOT NULL,
  `awardid` int(11) NOT NULL,
  PRIMARY KEY (`memberAwardId`),
  KEY `memberId` (`memberId`),
  KEY `awardid` (`awardid`),
  CONSTRAINT `fk_awardid` FOREIGN KEY (`memberAwardId`) REFERENCES `award` (`id`),
  CONSTRAINT `fk_memberid` FOREIGN KEY (`memberAwardId`) REFERENCES `member` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




*/


