SELECT u.*
FROM tbl_user u
JOIN tbl_item_user iu ON u.user_id = iu.user_id
WHERE iu.item_type_id = 12 AND iu.item_id = 2;
