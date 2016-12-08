-- ----------------------------------------------------------------------------------------------------
-- --------- seleting database ---------
-- ----------------------------------------------------------------------------------------------------

USE E_AUCTION;

-- ----------------------------------------------------------------------------------------------------
-- --------- inserting data into the tables ---------
-- ----------------------------------------------------------------------------------------------------

-- deleting previous data --
DELETE FROM NAV_TAB_MASTER;
DELETE FROM WEBPAGE_MASTER;
DELETE FROM WEBPAGE_PATH_MASTER;
DELETE FROM SECURITY_QUESTION_MASTER;
DELETE FROM SALUTATION_MASTER;
DELETE FROM CATEGORY_MASTER;



-- inserting new data for WEBPAGE_PATH_MASTER --
INSERT INTO WEBPAGE_PATH_MASTER (WEBPAGE_PATH_ID, WEBPAGE_PATH, WEBPAGE_PATH_STATUS, WEBPAGE_PATH_CREATION_STAMP, WEBPAGE_PATH_CREATED_BY, WEBPAGE_PATH_UPDATION_STAMP, WEBPAGE_PATH_UPDATED_BY) VALUES
    ('1', '/e_auction/', '0', '', '', '', ''),
    ('2', '/e_auction/site/', '0', '', '', '', ''),
    ('3', '/e_auction/site/user/', '0', '', '', '', ''),
    ('4', '/e_auction/site/admin/', '0', '', '', '', '');



-- inserting new data for WEBPAGE_MASTER --
INSERT INTO WEBPAGE_MASTER (WEBPAGE_ID, WEBPAGE_PATH_ID, WEBPAGE_NAME, WEBPAGE_NAV_TAB_NAME, WEBPAGE_STATUS, WEBPAGE_CREATION_STAMP, WEBPAGE_CREATED_BY, WEBPAGE_UPDATION_STAMP, WEBPAGE_UPDATED_BY) VALUES
    ('1', '1', 'index.php', 'home', '0', '', '', '', ''),
    ('2', '2', 'about_us.php', 'about us', '0', '', '', '', ''),
    ('3', '2', 'contact_us.php', 'contact us', '0', '', '', '', ''),
    ('4', '2', 'create_profile.php', 'create profile', '0', '', '', '', ''),
    ('5', '3', 'user.php', 'user profile', '0', '', '', '', ''),
    ('6', '3', 'my_advertisements.php', 'my advertisements', '0', '', '', '', ''),
    ('7', '3', 'my_bidded_items.php', 'my bidded items', '0', '', '', '', ''),
    ('8', '3', 'new_advertisement.php', 'new advertisement', '0', '', '', '', ''),
    ('9', '3', 'all_items.php', 'all items', '0', '', '', '', '');



-- inserting new data for SECURITY_QUESTION_MASTER --
INSERT INTO SECURITY_QUESTION_MASTER (SECURITY_QUESTION_ID, SECURITY_QUESTION_DETAILS, SECURITY_QUESTION_STATUS, SECURITY_QUESTION_CREATION_STAMP, SECURITY_QUESTION_CREATED_BY, SECURITY_QUESTION_UPDATION_STAMP, SECURITY_QUESTION_UPDATED_BY) VALUES
    ('1', 'What is your favorite movie?', '0', '', '', '', ''),
    ('2', 'What is the name of your favorite childhood friend?', '0', '', '', '', ''),
    ('3', 'What is the first name of the person you first kissed?', '0', '', '', '', ''),
    ('4', 'What was the name of the hospital where you were born?', '0', '', '', '', ''),
    ('5', 'In what city or town does your nearest sibling live?', '0', '', '', '', ''),
    ('6', 'In what year was your father born?', '0', '', '', '', '');



-- inserting new data for SALUTATION_MASTER --
INSERT INTO SALUTATION_MASTER (SALUTATION_ID, SALUTATION_NAME, SALUTATION_GENDER) VALUES
    ('1', 'Mr.', 'male'),
    ('2', 'Ms.', 'female'),
    ('3', 'Mrs.', 'female');



-- inserting new data for CATEGORY_MASTER --
INSERT INTO CATEGORY_MASTER (CATEGORY_ID, CATEGORY_NAME, CATEGORY_STATUS, CATEGORY_CREATION_STAMP, CATEGORY_CREATED_BY, CATEGORY_UPDATION_STAMP, CATEGORY_UPDATED_BY) VALUES
    ('1', 'house', '0', '', '', '', ''),
    ('2', 'vehicle', '0', '', '', '', ''),
    ('3', 'books', '0', '', '', '', ''),
    ('4', 'furniture', '0', '', '', '', ''),
    ('5', 'jewellery', '0', '', '', '', ''),
    ('6', 'electronics gadget', '0', '', '', '', ''),
    ('7', 'musical instrument', '0', '', '', '', ''),
    ('8', 'medicine', '0', '', '', '', ''),
    ('9', 'antique', '0', '', '', '', ''),
    ('10', 'other', '0', '', '', '', '');
