use pelanggaran_asisten;

-- Procedure Untuk Tampil Data Profile
DELIMITER //
CREATE PROCEDURE TampilDataProfile(IN p_ID_User INT)
BEGIN
    SELECT
        ID_User,
        nama,
        username,
        password,
        photo_path
    FROM
        user
    WHERE
        ID_User = p_ID_User;
END //
DELIMITER ;

-- Procedure untuk Detail Asisten
DELIMITER //
CREATE PROCEDURE TampilDetailAsisten(IN id INT)
BEGIN
	SELECT
		asisten.*, 
        user.photo_path 
	FROM asisten 
	JOIN user ON user.ID_User = asisten.ID_User 
	WHERE asisten.ID_Asisten = id;
END //
DELIMITER ;    