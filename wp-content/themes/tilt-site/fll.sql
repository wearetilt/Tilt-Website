IF OBJECT_ID ( 'introUser', 'P' ) IS NOT NULL 
    DROP PROCEDURE introUser;
GO
CREATE PROCEDURE introUser 
    @username nvarchar(50),
	@user_id int OUTPUT
AS 
	SET @user_id = (SELECT id FROM UserEntity where username = @username);
	IF @user_id IS NULL
		BEGIN
		INSERT INTO UserEntity (public_task_reflection, gpid, business_area, work_location, job_title, username, given_name, family_name, email, country_code, type, activated_at, first_logged_in_at, last_logged_in_at, is_absent, is_active, is_deleted, created_at, last_updated_at, is_auth_generated, employee_type, has_accepted_ts_and_cs, accepted_ts_and_cs_at)
			VALUES (0, @username+'_AUTHGEN', NULL, NULL, NULL, @username, 'Test', 'Test',	'tech@wearetilt.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, GETDATE(), GETDATE(), 1, 'E', 1,NULL);		
			SET @user_id = (SELECT id FROM UserEntity where username = @username);
		END
	RETURN @user_id;
GO

DECLARE @t1man int; 
DECLARE @t1mem1 int; 
DECLARE @t1mem2 int; 
DECLARE @t1mem3 int; 
DECLARE @t1mem4 int; 

DECLARE @t2man int; 
DECLARE @t2mem1 int; 
DECLARE @t2mem2 int; 

DECLARE @t3man int; 
DECLARE @t3mem1 int; 
DECLARE @t3mem2 int; 

DECLARE @t4man int; 
DECLARE @t4mem1 int; 
DECLARE @t4mem2 int; 
DECLARE @t4mem3 int;  

DECLARE @t1id int;
SET @t1id = 1; 

DECLARE @t2id int;
SET @t2id = 2; 

DECLARE @t3id int;
SET @t3id = 3; 

DECLARE @t4id int;
SET @t4id = 4;

EXECUTE introUser N'maj4t4', @user_id = @t1man OUTPUT;
EXECUTE introUser N'testjive', @user_id = @t1mem1 OUTPUT;
EXECUTE introUser N'testjive2', @user_id = @t1mem2 OUTPUT;
EXECUTE introUser N'testjive3', @user_id = @t1mem3 OUTPUT;
EXECUTE introUser N'testjive4', @user_id = @t1mem4 OUTPUT;

EXECUTE introUser N'brnwic', @user_id = @t2man OUTPUT;
EXECUTE introUser N'testjive5', @user_id = @t2mem1 OUTPUT;
EXECUTE introUser N'testjive6', @user_id = @t2mem2 OUTPUT;

EXECUTE introUser N'testjive5', @user_id = @t3man OUTPUT;
EXECUTE introUser N'testjive8', @user_id = @t3mem1 OUTPUT;
EXECUTE introUser N'stsllj', @user_id = @t3mem2 OUTPUT;

EXECUTE introUser N'prd1jk', @user_id = @t4man OUTPUT;
EXECUTE introUser N'testjive9', @user_id = @t4mem1 OUTPUT;
EXECUTE introUser N'testjive10', @user_id = @t4mem2 OUTPUT;
EXECUTE introUser N'hahq1d', @user_id = @t4mem3 OUTPUT;

ALTER TABLE Team NOCHECK CONSTRAINT all;
ALTER TABLE Team__User NOCHECK CONSTRAINT all;
ALTER TABLE Team__ActiveUser NOCHECK CONSTRAINT all;
ALTER TABLE MotivatorRequest NOCHECK CONSTRAINT all;

delete from Team;
DBCC CHECKIDENT(Team, RESEED, 0);
insert into Team (leader_id, name, is_active, is_deleted, created_at, last_updated_at, automatic_feedback_request_frequency) 
	values (@t1man, 'Team 1', 1, 0, GETDATE(), GETDATE(), 3);
insert into Team (leader_id, name, is_active, is_deleted, created_at, last_updated_at, automatic_feedback_request_frequency) 
	values (@t2man, 'Team 2', 1, 0, GETDATE(), GETDATE(), 4);
insert into Team (leader_id, name, is_active, is_deleted, created_at, last_updated_at, automatic_feedback_request_frequency) 
	values (@t3man, 'Team 3', 1, 0, GETDATE(), GETDATE(), 5);
insert into Team (leader_id, name, is_active, is_deleted, created_at, last_updated_at, automatic_feedback_request_frequency) 
	values (@t4man, 'Team 4', 1, 0, GETDATE(), GETDATE(), 6);

delete from Team__User;
INSERT INTO Team__User VALUES (1, @t1mem1);
INSERT INTO Team__User VALUES (1, @t1mem2);
INSERT INTO Team__User VALUES (1, @t1mem3);
INSERT INTO Team__User VALUES (1, @t1mem4);
INSERT INTO Team__User VALUES (2, @t2mem1);
INSERT INTO Team__User VALUES (2, @t2mem2);
INSERT INTO Team__User VALUES (3, @t3mem1);
INSERT INTO Team__User VALUES (3, @t3mem2);
INSERT INTO Team__User VALUES (4, @t4mem1);
INSERT INTO Team__User VALUES (4, @t4mem2);
INSERT INTO Team__User VALUES (4, @t4mem3);

select * from UserEntity;

ALTER TABLE Team__User NOCHECK CONSTRAINT all;
ALTER TABLE Team__ActiveUser NOCHECK CONSTRAINT all;
ALTER TABLE Team NOCHECK CONSTRAINT all;
ALTER TABLE MotivatorRequest NOCHECK CONSTRAINT all;


ALTER TABLE MotivatorRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivator NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivatorRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivatorRequest__Motivator NOCHECK CONSTRAINT all;


DELETE FROM MotivatorRequest WHERE creator_id = @t1man;
DELETE FROM MotivatorRequest WHERE creator_id = @t2man;
DELETE FROM MotivatorRequest WHERE creator_id = @t3man;
DELETE FROM MotivatorRequest WHERE creator_id = @t4man;
DELETE FROM UserMotivator;
DELETE FROM UserMotivatorRequest;

INSERT INTO MotivatorRequest (team_id, creator_id) VALUES (@t1id, @t1man);
DECLARE @mr1 int;
SET @mr1 = @@IDENTITY;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded, user_responded_at) 
VALUES (@mr1, @t1mem1, @t1man, 1, current_timestamp);
DECLARE @umr1 int;
SET @umr1 = @@IDENTITY;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem1, 5, 1) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem1, 9, 2) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem1, 19, 3) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem1, 1, 4) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem1, 3, 5) ;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded) 
VALUES (@mr1, @t1mem2, @t1man, 0);
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded, user_responded_at) 
VALUES (@mr1, @t1mem3, @t1man, 1, current_timestamp);
SET @umr1 = @@IDENTITY;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem3, 7, 1) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem3, 11, 2) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem3, 2, 3) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem3, 17, 4) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr1,@t1mem3, 6, 5) ;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded) VALUES (@mr1, @t1mem4, @t1man, 0);

INSERT INTO MotivatorRequest (team_id, creator_id, created_at) VALUES (@t2id, @t2man, DATEADD(WK,-1, GETDATE()));
DECLARE @mr2 int;
SET @mr2 = @@IDENTITY;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded, user_responded_at) 
VALUES (@mr2, @t2mem1, @t2man, 1, current_timestamp);
DECLARE @umr2 int;
SET @umr2 = @@IDENTITY;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr2,@t2mem1, 2, 1) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr2,@t2mem1, 20, 2) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr2,@t2mem1, 16, 3) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr2,@t2mem1, 1, 4) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr2,@t2mem1, 14, 5) ;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded, created_at) 
VALUES (@mr2, @t2mem2, @t2man, 0,  DATEADD(WK,-1, GETDATE()));

INSERT INTO MotivatorRequest (team_id, creator_id) VALUES (@t4id, @t4man);
DECLARE @mr4 int;
SET @mr4 = @@IDENTITY;
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded) VALUES (@mr4, @t4mem1, @t4man, 0);
INSERT INTO UserMotivatorRequest (motivator_request_id, user_id, requested_by_user_id, user_has_responded, user_responded_at) 
VALUES (@mr4, @t4mem2, @t4man, 1, current_timestamp);
DECLARE @umr4 int;
SET @umr4 = @@IDENTITY;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr4,@t4mem2, 12, 1) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr4,@t4mem2, 2, 2) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr4,@t4mem2, 6, 3) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr4,@t4mem2, 15, 4) ;
INSERT INTO UserMotivator (user_motivator_request_id, user_id, motivator_id, sort_order) VALUES (@umr4,@t4mem2, 4, 5) ;

ALTER TABLE MotivatorRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivator NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivatorRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserMotivatorRequest__Motivator NOCHECK CONSTRAINT all;

ALTER TABLE FeedbackRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackResponse NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackResponseAnswer NOCHECK CONSTRAINT all;

DELETE FROM FeedbackRequest WHERE creator_id = @t1man;
DELETE FROM FeedbackRequest WHERE creator_id = @t2man;
DELETE FROM FeedbackRequest WHERE creator_id = @t3man;
DELETE FROM FeedbackRequest WHERE creator_id = @t4man;
DELETE FROM UserFeedbackRequest;
DELETE FROM UserFeedbackResponse;
DELETE FROM UserFeedbackResponseAnswer;

DECLARE @groupsched int;
DECLARE @questgroup int;
SET @groupsched = 7;
SET @questgroup = 22;

INSERT INTO FeedbackRequest (question_group_schedule_id, team_id, creator_id, created_at, mood, reflection_text)
 VALUES (@groupsched, @t1id, @t1man, DATEADD(WK,-1, GETDATE()), 1, 'I am mood 1');
DECLARE @fbr1 int;
SET @fbr1 = @@IDENTITY;
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) VALUES (@fbr1, @t1mem1, @t1man, 0, 1);
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) VALUES (@fbr1, @t1mem2, @t1man, 1, 1);
INSERT INTO UserFeedbackResponse (user_feedback_request_id) VALUES (@fbr1);
DECLARE @ufbrid int;
SET @ufbrid = @@IDENTITY;
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (1, @questgroup, @ufbrid, 50);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (2, @questgroup, @ufbrid, 76);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (3, @questgroup, @ufbrid, 13);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (4, @questgroup, @ufbrid, 82);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (5, @questgroup, @ufbrid, 67);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (6, @questgroup, @ufbrid, 13);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (7, @questgroup, @ufbrid, 46);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) 
VALUES (8, @questgroup, @ufbrid, 23);
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) 
VALUES (@fbr1, @t1mem3, @t1man, 1, 1);
INSERT INTO UserFeedbackResponse (user_feedback_request_id) VALUES (@fbr1);
SET @ufbrid = @@IDENTITY;
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (1, @questgroup, @ufbrid, 6);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (2, @questgroup, @ufbrid, 34);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (3, @questgroup, @ufbrid, 19);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (4, @questgroup, @ufbrid, 13);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (5, @questgroup, @ufbrid, 66);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (6, @questgroup, @ufbrid, 14);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (7, @questgroup, @ufbrid, 23);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (8, @questgroup, @ufbrid, 97);
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) VALUES (@fbr1, @t1mem4, @t1man, 0, 1);

INSERT INTO FeedbackRequest (question_group_schedule_id, team_id, creator_id, period_covered_from, mood, reflection_text) VALUES (@groupsched, @t3id, @t3man, current_timestamp, 5, 'I am mood 5 la la');
DECLARE @fbr3 int;
SET @fbr3 = @@IDENTITY;
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) VALUES (@fbr3, @t3mem1, @t3man, 1, 1);
INSERT INTO UserFeedbackResponse (user_feedback_request_id) VALUES (@fbr3);
DECLARE @ufbrid3 int;
SET @ufbrid3 = @@IDENTITY;
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (1, @questgroup, @ufbrid3, 47);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (2, @questgroup, @ufbrid3, 93);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (3, @questgroup, @ufbrid3, 27);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (4, @questgroup, @ufbrid3, 64);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (5, @questgroup, @ufbrid3, 8);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (6, @questgroup, @ufbrid3, 28);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (7, @questgroup, @ufbrid3, 22);
INSERT INTO UserFeedbackResponseAnswer (question_id, question_group_id, user_feedback_response_id, response) VALUES (8, @questgroup, @ufbrid3, 18);
INSERT INTO UserFeedbackRequest (feedback_request_id, user_id, requested_by_user_id, user_has_responded, requested) VALUES (@fbr3, @t3mem2, @t3man, 0, 1);



ALTER TABLE FeedbackRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackRequest NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackResponse NOCHECK CONSTRAINT all;
ALTER TABLE UserFeedbackResponseAnswer NOCHECK CONSTRAINT all;