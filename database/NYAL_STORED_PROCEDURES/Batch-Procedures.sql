
DELIMITER ;;

-- ====================================================================================== --
-- CreateClubIDs --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `CreateClubIDs`()
BEGIN

		DECLARE v_done INTEGER DEFAULT 0;
		
		DECLARE v_club_name VARCHAR(100);
		DECLARE v_club_name_short VARCHAR(100);
		DECLARE v_shortName_comparison VARCHAR(100) DEFAULT '';
		DECLARE newClub_ID INTEGER(10) DEFAULT 0;
		DECLARE v_teamImported_ID INTEGER;
	
		DECLARE newClubID_cursor CURSOR FOR
			SELECT Team_ID, club_name, club_name_short
			FROM Club_Imported;
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND 
			SET v_done = 1;
		
		OPEN newClubID_cursor;
	
			clubs_loop: LOOP
		
				FETCH newClubID_cursor INTO v_teamImported_ID, v_club_name, v_club_name_short;
	
				IF v_done = 1 THEN
					LEAVE clubs_loop;
				END IF;

				IF v_club_name_short = v_shortName_comparison THEN
					SET newClub_ID = newClub_ID;
				ELSE
					SET newClub_ID = newClub_ID + 1;
				END IF;
				
				SET v_shortName_comparison = v_club_name_short;
		
				UPDATE Club_Imported
				SET tmp_Club_ID = newClub_ID
				WHERE Team_ID = v_teamImported_ID;
			
			END LOOP clubs_loop;
		CLOSE newClubID_cursor;
		
	END;;


-- ====================================================================================== --
-- GetAllClubAthletes --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `GetAllClubAthletes`()
BEGIN
SELECT * FROM Athlete_ClubMember;
END;;


-- ====================================================================================== --
-- GetAllProducts --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `GetAllProducts`()
BEGIN
   SELECT *  FROM products;
   END;;


-- ====================================================================================== --
-- InsertEventInstanceRaces --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `InsertEventInstanceRaces`(
	IN p_COPY_Event_InstanceID INTEGER(10), 
	IN p_SET_Event_InstanceID INTEGER(10), 
	IN p_SET_race_year INTEGER(4))
BEGIN

	DECLARE v_done INTEGER DEFAULT 0;
		
	DECLARE v_Event_InstanceID INTEGER(10) DEFAULT 0;
	DECLARE v_race_year INTEGER;
	DECLARE v_race_name VARCHAR(100);
	DECLARE v_distance_value INTEGER;
	DECLARE v_distance_units VARCHAR(100);
	DECLARE v_gender CHAR(1);
	DECLARE v_age1 INTEGER;
	DECLARE v_age2 INTEGER;
	DECLARE v_age3 INTEGER;
	DECLARE v_age4 INTEGER;
	DECLARE v_age_range VARCHAR(5);

	DECLARE insert_EventInstanceRace_cursor CURSOR FOR
		SELECT race_name, race_distance_value, race_distance_units, Gender, age_1, age_2, age_3, age_4, age_range
		FROM Event_Instance_Race
		WHERE Event_Instance_ID = p_COPY_Event_InstanceID;
		
	DECLARE CONTINUE HANDLER FOR NOT FOUND 
		SET v_done = 1;
		
	OPEN insert_EventInstanceRace_cursor;
	
		eventInstanceRace_loop: LOOP
		
			FETCH insert_EventInstanceRace_cursor INTO v_race_name, v_distance_value, v_distance_units, v_gender, v_age1, v_age2, v_age3, v_age4, v_age_range;
	
			IF v_done = 1 THEN
				LEAVE eventInstanceRace_loop;
			END IF;

			SET v_Event_InstanceID = p_SET_Event_InstanceID;
			SET v_race_year = p_SET_race_year;
		
			INSERT INTO Event_Instance_Race (Event_Instance_ID, race_year, race_name, race_distance_value, race_distance_units, Gender, age_1, age_2, age_3, age_4, age_range)
			VALUES (v_Event_InstanceID, v_race_year, v_race_name, v_distance_value, v_distance_units, v_gender, v_age1, v_age2, v_age3, v_age4, v_age_range);
			
		END LOOP eventInstanceRace_loop;
	CLOSE insert_EventInstanceRace_cursor;
		
END;;


-- ====================================================================================== --
-- MyWhileLoop --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `MyWhileLoop`()
BEGIN
 DECLARE x  INT;
 DECLARE str  VARCHAR(255);
 
 SET x = 1;
 SET str =  '';
 
 WHILE x  <= 5 DO
 SET  str = CONCAT(str,x,',');
 SET  x = x + 1; 
 END WHILE;
 
 SELECT str;
 END;;


-- ====================================================================================== --
-- NightlyTasks --
 
CREATE DEFINER=`MasterUser`@`%` PROCEDURE `NightlyTasks`()
BEGIN
	
	UPDATE Athlete
	SET age_current = ((date_format(now(),'%Y') - date_format(Athlete.dob,'%Y')) - (date_format(now(),'00-%m-%d') < date_format(Athlete.dob,'00-%m-%d')));
	
END;;


-- ====================================================================================== --
-- UpdateAgeDivisions --

CREATE DEFINER=`MasterUser`@`%` PROCEDURE `UpdateAgeDivisions`()
BEGIN
	
	UPDATE Athlete
	SET age_endofyear = ((date_format("2016-12-31",'%Y') - date_format(Athlete.dob,'%Y')) - (date_format("2016-12-31",'00-%m-%d') < date_format(Athlete.dob,'00-%m-%d')));
	
	
	UPDATE Athlete
	SET age_division = "17-18", age_division_distance = '5K'
	WHERE age_current = 17 OR age_current = 18;
	
	UPDATE Athlete
	SET age_division = "15-16", age_division_distance = '5K'
	WHERE age_current = 15 OR age_current = 16;
	
	UPDATE Athlete
	SET age_division = "13-14", age_division_distance = '4K'
	WHERE age_current = 13 OR age_current = 14;
	
	UPDATE Athlete
	SET age_division = "11-12", age_division_distance = '3K'
	WHERE age_current = 11 OR age_current = 12;
	
	UPDATE Athlete
	SET age_division = "09-10", age_division_distance = '3K'
	WHERE age_current = 9 OR age_current = 10;
	
	UPDATE Athlete
	SET age_division = "07-08", age_division_distance = '2K'
	WHERE age_current = 7 OR age_current = 8;
	
	UPDATE Athlete
	SET age_division = "06 & Under", age_division_distance = '1K'
	WHERE age_current <= 6;
	
END;;

-- ====================================================================================== --

DELIMITER ;