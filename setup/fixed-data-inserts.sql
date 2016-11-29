-- ----------------------------------------------------------------------------------------------------
-- --------- seleting database ---------
-- ----------------------------------------------------------------------------------------------------

USE E_AUCTION;

-- ----------------------------------------------------------------------------------------------------
-- --------- inserting data into the tables ---------
-- ----------------------------------------------------------------------------------------------------

-- deleting previous data and inserting new data for WEBPAGE_PATH_MASTER --
DELETE FROM WEBPAGE_PATH_MASTER;
INSERT INTO WEBPAGE_PATH_MASTER (WEBPAGE_PATH_ID, WEBPAGE_PATH, WEBPAGE_PATH_CREATION_STAMP, WEBPAGE_PATH_CREATED_BY, WEBPAGE_PATH_UPDATION_STAMP, WEBPAGE_PATH_UPDATED_BY) VALUES
    ('', '/e_auction/', '', '', '', ''),
    ('', '/e_auction/site/', '', '', '', ''),
    ('', '/e_auction/site/user/', '', '', '', ''),
    ('', '/e_auction/site/admin/', '', '', '', '');



-- deleting previous data and inserting new data for WEBPAGE_MASTER --
DELETE FROM WEBPAGE_MASTER;
INSERT INTO WEBPAGE_MASTER (WEBPAGE_ID, WEBPAGE_PATH_ID, WEBPAGE_NAME, WEBPAGE_NAV_TAB_NAME, WEBPAGE_RENDER_STATUS, WEBPAGE_CREATION_STAMP, WEBPAGE_CREATED_BY, WEBPAGE_UPDATION_STAMP, WEBPAGE_UPDATED_BY) VALUES
    ('', '1', 'index.php', 'home', '0', '', '', '', ''),
    ('', '2', 'about_us.php', 'about us', '0', '', '', '', ''),
    ('', '2', 'contact_us.php', 'contact us', '0', '', '', '', ''),
    ('', '2', 'create_profile.php', 'create profile', '0', '', '', '', ''),
    ('', '3', 'user.php', 'user profile', '0', '', '', '', ''),
    ('', '3', 'my_advertisements.php', 'my advertisements', '0', '', '', '', ''),
    ('', '3', 'my_bidded_items.php', 'my bidded items', '0', '', '', '', ''),
    ('', '3', 'new_advertisement.php', 'new advertisement', '0', '', '', '', ''),
    ('', '3', 'all_items.php', 'all items', '0', '', '', '', '');



-- deleting previous data and inserting new data for SECURITY_QUESTION_MASTER --
DELETE FROM SECURITY_QUESTION_MASTER;
INSERT INTO SECURITY_QUESTION_MASTER (SECURITY_QUESTION_ID, SECURITY_QUESTION_DETAILS, SECURITY_QUESTION_CREATION_STAMP, SECURITY_QUESTION_CREATED_BY, SECURITY_QUESTION_UPDATION_STAMP, SECURITY_QUESTION_UPDATED_BY) VALUES
    ('', 'What is your favorite movie?', '', '', '', ''),
    ('', 'What is the name of your favorite childhood friend?', '', '', '', ''),
    ('', 'What is the first name of the person you first kissed?', '', '', '', ''),
    ('', 'What was the name of the hospital where you were born?', '', '', '', ''),
    ('', 'In what city or town does your nearest sibling live?', '', '', '', ''),
    ('', 'In what year was your father born?', '', '', '', '');



-- deleting previous data and inserting new data for SALUTATION_MASTER --
DELETE FROM SALUTATION_MASTER;
INSERT INTO SALUTATION_MASTER (SALUTATION_ID, SALUTATION_NAME, SALUTATION_GENDER) VALUES
    ('', 'Mr.', 'male'),
    ('', 'Ms.', 'female'),
    ('', 'Mrs.', 'female');



-- deleting previous data and inserting new data for CATEGORY_MASTER --
DELETE FROM CATEGORY_MASTER;
INSERT INTO CATEGORY_MASTER (CATEGORY_ID, CATEGORY_NAME, CATEGORY_RENDER_STATUS, CATEGORY_CREATION_STAMP, CATEGORY_CREATED_BY, CATEGORY_UPDATION_STAMP, CATEGORY_UPDATED_BY) VALUES
    ('', 'house', 1, '', '', '', ''),
    ('', 'vehicle', 1, '', '', '', ''),
    ('', 'books', 1, '', '', '', ''),
    ('', 'furniture', 1, '', '', '', ''),
    ('', 'jewellery', 1, '', '', '', ''),
    ('', 'electronics gadget', 1, '', '', '', ''),
    ('', 'musical instrument', 1, '', '', '', ''),
    ('', 'medicine', 1, '', '', '', ''),
    ('', 'antique', 1, '', '', '', ''),
    ('', 'other', 1, '', '', '', '');
