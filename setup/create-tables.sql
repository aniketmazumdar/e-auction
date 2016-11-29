-- ----------------------------------------------------------------------------------------------------
-- --------- creating database 'auction' ---------
-- ----------------------------------------------------------------------------------------------------

DROP DATABASE IF EXISTS E_AUCTION;
CREATE DATABASE IF NOT EXISTS E_AUCTION;
USE E_AUCTION;

-- ----------------------------------------------------------------------------------------------------
-- -------- creating tables --------
-- ----------------------------------------------------------------------------------------------------

-- table for folder path of webpages --
CREATE TABLE IF NOT EXISTS WEBPAGE_PATH_MASTER (
    WEBPAGE_PATH_ID                         INT NOT NULL AUTO_INCREMENT,
    WEBPAGE_PATH                            VARCHAR(100) NOT NULL,
    WEBPAGE_PATH_RENDER_STATUS              INT NOT NULL COMMENT "VALID VALUES: 0(VISIBLE), 1(INVISIBLE)",
    WEBPAGE_PATH_CREATION_STAMP             DATETIME,
    WEBPAGE_PATH_CREATED_BY                 INT,
    WEBPAGE_PATH_UPDATION_STAMP             DATETIME,
    WEBPAGE_PATH_UPDATED_BY                 INT,
    PRIMARY KEY (WEBPAGE_PATH_ID)
);



-- table for webpages --
CREATE TABLE IF NOT EXISTS WEBPAGE_MASTER (
    WEBPAGE_ID                              INT NOT NULL AUTO_INCREMENT,
    WEBPAGE_PATH_ID                         INT NOT NULL,
    WEBPAGE_NAME                            VARCHAR(50) NOT NULL,
    WEBPAGE_NAV_TAB_NAME                    VARCHAR(50) NOT NULL,
    WEBPAGE_RENDER_STATUS                   INT NOT NULL COMMENT "VALID VALUES: 0(VISIBLE), 1(INVISIBLE)",
    WEBPAGE_CREATION_STAMP                  DATETIME,
    WEBPAGE_CREATED_BY                      INT,
    WEBPAGE_UPDATION_STAMP                  DATETIME,
    WEBPAGE_UPDATED_BY                      INT,
    PRIMARY KEY (WEBPAGE_ID),
    FOREIGN KEY (WEBPAGE_PATH_ID) REFERENCES WEBPAGE_PATH_MASTER (WEBPAGE_PATH_ID)
);



-- table for nav tab sequence --
CREATE TABLE IF NOT EXISTS NAV_TAB_MASTER (
    NAV_TAB_ID                              INT NOT NULL AUTO_INCREMENT,
    NAV_TAB_WEBPAGE_ID                      INT NOT NULL,
    NAV_TAB_SEQUENCE                        INT NOT NULL,
    SELECTED_WEBPAGE_ID                     INT NOT NULL,
    NAV_TAB_RENDER_STATUS                   INT NOT NULL COMMENT "VALID VALUES: 0(VISIBLE), 1(INVISIBLE)",
    NAV_TAB_CREATION_STAMP                  DATETIME,
    NAV_TAB_CREATED_BY                      INT,
    NAV_TAB_UPDATION_STAMP                  DATETIME,
    NAV_TAB_UPDATED_BY                      INT,
    PRIMARY KEY (NAV_TAB_ID),
    FOREIGN KEY (NAV_TAB_WEBPAGE_ID) REFERENCES WEBPAGE_MASTER (WEBPAGE_ID),
    FOREIGN KEY (SELECTED_WEBPAGE_ID) REFERENCES WEBPAGE_MASTER (WEBPAGE_ID)
);



-- table for salutations --
CREATE TABLE IF NOT EXISTS SALUTATION_MASTER (
    SALUTATION_ID                           INT NOT NULL AUTO_INCREMENT,
    SALUTATION_NAME                         VARCHAR(10) NOT NULL,
    SALUTATION_GENDER                       VARCHAR(10) NOT NULL,
    PRIMARY KEY (SALUTATION_ID)
);



-- table for countries --
CREATE TABLE IF NOT EXISTS COUNTRY_MASTER (
    COUNTRY_ID                              INT NOT NULL AUTO_INCREMENT,
    COUNTRY_SHORT_NAME                      VARCHAR(3) NOT NULL,
    COUNTRY_NAME                            VARCHAR(100) NOT NULL,
    PRIMARY KEY (COUNTRY_ID)
);



-- table for states --
CREATE TABLE IF NOT EXISTS STATE_MASTER (
    STATE_ID                                INT NOT NULL AUTO_INCREMENT,
    STATE_NAME                              VARCHAR(30) NOT NULL,
    COUNTRY_ID                              INT NOT NULL,
    PRIMARY KEY (STATE_ID),
    FOREIGN KEY (COUNTRY_ID) REFERENCES COUNTRY_MASTER (COUNTRY_ID)
);



-- table for cities --
CREATE TABLE IF NOT EXISTS CITY_MASTER (
    CITY_ID                                 INT NOT NULL AUTO_INCREMENT,
    CITY_NAME                               VARCHAR(30) NOT NULL,
    STATE_ID                                INT NOT NULL,
    PRIMARY KEY (CITY_ID),
    FOREIGN KEY (STATE_ID) REFERENCES STATE_MASTER (STATE_ID)
);



-- table for security questions --
CREATE TABLE IF NOT EXISTS SECURITY_QUESTION_MASTER (
    SECURITY_QUESTION_ID                    INT NOT NULL AUTO_INCREMENT,
    SECURITY_QUESTION_DETAILS               VARCHAR(100) NOT NULL,
    SECURITY_QUESTION_RENDER_STATUS         INT NOT NULL COMMENT "VALID VALUES: 0(VISIBLE), 1(INVISIBLE)",
    SECURITY_QUESTION_CREATION_STAMP        DATETIME,
    SECURITY_QUESTION_CREATED_BY		    INT,
    SECURITY_QUESTION_UPDATION_STAMP        DATETIME,
    SECURITY_QUESTION_UPDATED_BY		    INT,
    PRIMARY KEY (SECURITY_QUESTION_ID)
);



-- table for registered members --
CREATE TABLE IF NOT EXISTS MEMBER_MASTER (
    MEMBER_ID                            INT NOT NULL AUTO_INCREMENT,
    MEMBER_TYPE                          INT NOT NULL COMMENT "VALID VALUES: 0(USER), 1(ADMIN)",
    MEMBER_SALUTATION                    INT NOT NULL,
    MEMBER_FIRST_NAME                    VARCHAR(50) NOT NULL,
    MEMBER_MIDDLE_NAME                   VARCHAR(50),
    MEMBER_LAST_NAME                     VARCHAR(50) NOT NULL,
    MEMBER_DATE_OF_BIRTH_STAMP           DATETIME NOT NULL,
    MEMBER_COUNTRY                       INT NOT NULL,
    MEMBER_STATE                         INT NOT NULL,
    MEMBER_DISTRICT                      VARCHAR(50),
    MEMBER_CITY                          INT,
    MEMBER_ADDRESS_1                     VARCHAR(50) NOT NULL,
    MEMBER_ADDRESS_2                     VARCHAR(50),
    MEMBER_ZIP_CODE                      VARCHAR(10) NOT NULL,
    MEMBER_EMAIL                         VARCHAR(100) NOT NULL,
    MEMBER_ALTERNATE_EMAIL               VARCHAR(100),
    MEMBER_PHONE                         VARCHAR(10) NOT NULL,
    MEMBER_FAX                           VARCHAR(10),
    MEMBER_PASSWORD                      VARCHAR(20) NOT NULL,
    MEMBER_SECURITY_QUESTION             INT NOT NULL,
    MEMBER_SECURITY_ANSWER               VARCHAR(50) NOT NULL,
    MEMBER_PHOTO                         VARCHAR(200),
    MEMBER_CREATION_STAMP                DATETIME,
    MEMBER_CREATED_BY		             INT,
    MEMBER_UPDATION_STAMP                DATETIME,
    MEMBER_UPDATED_BY		             INT,
    PRIMARY KEY (MEMBER_ID),
    FOREIGN KEY (MEMBER_SALUTATION) REFERENCES SALUTATION_MASTER (SALUTATION_ID),
    FOREIGN KEY (MEMBER_COUNTRY) REFERENCES COUNTRY_MASTER (COUNTRY_ID),
    FOREIGN KEY (MEMBER_STATE) REFERENCES STATE_MASTER (STATE_ID),
    FOREIGN KEY (MEMBER_CITY) REFERENCES CITY_MASTER (CITY_ID),
    FOREIGN KEY (MEMBER_SECURITY_QUESTION) REFERENCES SECURITY_QUESTION_MASTER (SECURITY_QUESTION_ID)
);



-- table for categories of auction items --
CREATE TABLE IF NOT EXISTS CATEGORY_MASTER (
	CATEGORY_ID                            INT NOT NULL AUTO_INCREMENT,
	CATEGORY_NAME			               VARCHAR(50) NOT NULL,
	CATEGORY_RENDER_STATUS                 INT NOT NULL COMMENT "VALID VALUES: 0(VISIBLE), 1(INVISIBLE)",
    CATEGORY_CREATION_STAMP                DATETIME,
    CATEGORY_CREATED_BY		               INT,
    CATEGORY_UPDATION_STAMP                DATETIME,
    CATEGORY_UPDATED_BY		               INT,
	PRIMARY KEY (CATEGORY_ID)
);



-- table for auction items --
CREATE TABLE IF NOT EXISTS AUCTION_ITEM_MASTER (
	AUCTION_ITEM_ID                        INT NOT NULL AUTO_INCREMENT,
    AUCTION_ITEM_CATEGORY                  INT NOT NULL,
	AUCTION_ITEM_TITLE			           VARCHAR(50) NOT NULL,
	AUCTION_ITEM_DESCRIPTION               VARCHAR(200),
    AUCTION_ITEM_USED_TIME_PERIOD          VARCHAR(20) NOT NULL,
    AUCTION_ITEM_CLASSIFIED_PRICE          VARCHAR(20) NOT NULL,
    AUCTION_ITEM_BIDDING_CLOSING_STAMP     DATETIME NOT NULL,
    AUCTION_ITEM_IMAGE                     VARCHAR(200) NOT NULL,
    AUCTION_ITEM_SELLER_ID                 INT NOT NULL,
    AUCTION_ITEM_APPROVAL_STATUS           INT NOT NULL COMMENT "VALID VALUES: 0(APPROVED), 1(NOT APPROVED)",
    AUCTION_ITEM_COUNTRY                   INT NOT NULL,
    AUCTION_ITEM_STATE                     INT NOT NULL,
    AUCTION_ITEM_DISTRICT                  VARCHAR(50),
    AUCTION_ITEM_CITY                      INT,
    AUCTION_ITEM_ADDRESS_1                 VARCHAR(50) NOT NULL,
    AUCTION_ITEM_ADDRESS_2                 VARCHAR(50),
    AUCTION_ITEM_ZIP_CODE                  VARCHAR(10) NOT NULL,
    AUCTION_ITEM_DISPATH_STAMP             DATETIME,
    AUCTION_ITEM_BIDDING_STATUS            INT NOT NULL COMMENT "VALID VALUES: 0(OPENED), 1(CLOSED)",
    AUCTION_ITEM_CREATION_STAMP            DATETIME,
    AUCTION_ITEM_CREATED_BY		           INT,
    AUCTION_ITEM_UPDATION_STAMP            DATETIME,
    AUCTION_ITEM_UPDATED_BY		           INT,
	PRIMARY KEY (AUCTION_ITEM_ID),
    FOREIGN KEY (AUCTION_ITEM_CATEGORY) REFERENCES CATEGORY_MASTER (CATEGORY_ID),
    FOREIGN KEY (AUCTION_ITEM_COUNTRY) REFERENCES COUNTRY_MASTER (COUNTRY_ID),
    FOREIGN KEY (AUCTION_ITEM_STATE) REFERENCES STATE_MASTER (STATE_ID),
    FOREIGN KEY (AUCTION_ITEM_CITY) REFERENCES CITY_MASTER (CITY_ID)
);



-- table for bidding of auction items --
CREATE TABLE IF NOT EXISTS BIDDING_MASTER (
    BIDDING_ID                          INT NOT NULL AUTO_INCREMENT,
    BIDDING_ITEM                        INT NOT NULL,
    BIDDING_PRICE                       VARCHAR(20) NOT NULL,
    BIDDING_ITEM_BIDDER                 INT NOT NULL,
    BIDDING_STAMP                       DATETIME NOT NULL,
    PRIMARY KEY (BIDDING_ID),
    FOREIGN KEY (BIDDING_ITEM) REFERENCES AUCTION_ITEM_MASTER (AUCTION_ITEM_ID),
    FOREIGN KEY (BIDDING_ITEM_BIDDER) REFERENCES MEMBER_MASTER (MEMBER_ID)
);



-- ---------------------------------------  END  ------------------------------------------------------------
-- ---------------------------------- TOTAL TABLE = 12 ------------------------------------------------------
