CREATE TABLE `perkara` (
  `kodeperkara` char(10) NOT NULL,
  `penggugat` char(30) DEFAULT NULL,
  `tergugat` char(30) DEFAULT NULL,
  `amarputusan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kodeperkara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `panitera` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`kodeperkara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `hakim` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`kodeperkara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `saksi` (
  `kodeperkara` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`kodeperkara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
