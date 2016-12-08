-- ----------------------------------------------------------------------------------------------------
-- --------- seleting database ---------
-- ----------------------------------------------------------------------------------------------------

USE E_AUCTION;

-- ----------------------------------------------------------------------------------------------------
-- --------- inserting data into the tables ---------
-- ----------------------------------------------------------------------------------------------------

-- inserting data for MEMBER_MASTER --
INSERT INTO MEMBER_MASTER (MEMBER_ID, MEMBER_TYPE, MEMBER_SALUTATION, MEMBER_FIRST_NAME, MEMBER_MIDDLE_NAME, MEMBER_LAST_NAME, MEMBER_DATE_OF_BIRTH_STAMP, MEMBER_COUNTRY, MEMBER_STATE, MEMBER_DISTRICT, MEMBER_CITY, MEMBER_ADDRESS_1, MEMBER_ADDRESS_2, MEMBER_ZIP_CODE, MEMBER_EMAIL, MEMBER_ALTERNATE_EMAIL, MEMBER_PHONE, MEMBER_FAX, MEMBER_PASSWORD, MEMBER_SECURITY_QUESTION, MEMBER_SECURITY_ANSWER, MEMBER_PHOTO, MEMBER_ACCOUNT_STATUS, MEMBER_CREATION_STAMP, MEMBER_CREATED_BY, MEMBER_UPDATION_STAMP, MEMBER_UPDATED_BY) VALUES
    ('', '0', '1', 'Aniket', 'Kumar', 'Mazumdar', '1993-03-02', '101', '41', 'Bardhaman', '5561', 'Nirole', 'Ketugram', '713140', 'aniketmazumdar1994@gmail.com', 'aniketmazumdar@outlook.com', '8653894003', '7602999141', '123qW@', '1', 'sonar kella', '', '0','', '', '', '');



-- inserting data for AUCTION_ITEM_MASTER --
--INSERT INTO AUCTION_ITEM_MASTER (AUCTION_ITEM_ID, AUCTION_ITEM_CATEGORY_ID, AUCTION_ITEM_TITLE, AUCTION_ITEM_DESCRIPTION, AUCTION_ITEM_USED_TIME_PERIOD, AUCTION_ITEM_CLASSIFIED_PRICE, AUCTION_ITEM_BIDDING_CLOSING_STAMP, AUCTION_ITEM_IMAGE, AUCTION_ITEM_SELLER_ID, AUCTION_ITEM_APPROVAL_STATUS, AUCTION_ITEM_ADDRESS_1, AUCTION_ITEM_ADDRESS_2, AUCTION_ITEM_CITY, AUCTION_ITEM_DISTRICT, AUCTION_ITEM_STATE, AUCTION_ITEM_COUNTRY, AUCTION_ITEM_ZIP_CODE, AUCTION_ITEM_DISPATH_STAMP, AUCTION_ITEM_LAST_BIDDING_PRICE, AUCTION_ITEM_LAST_BIDDER_ID, AUCTION_ITEM_BIDDING_STATUS, AUCTION_ITEM_CREATION_STAMP, AUCTION_ITEM_CREATED_BY, AUCTION_ITEM_UPDATION_STAMP, AUCTION_ITEM_UPDATED_BY) VALUES
--    (1, 1, '3BHK Flat with garden', 'nice family home', '2 year', 2000000, 1472877146, 'images/1.jpg', 1, 0, 'dumdum', '', 'kolkata', 'kolkata', 'west bengal', 'india', '700001', 1473309146, '', '', 0, 1470654493, 1, '', '');
