<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection game_class_id
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection is_recommend
     * @property Grid\Column|Collection image
     * @property Grid\Column|Collection attempts
     * @property Grid\Column|Collection reserved_at
     * @property Grid\Column|Collection available_at
     * @property Grid\Column|Collection is_video
     * @property Grid\Column|Collection stream
     * @property Grid\Column|Collection pull
     * @property Grid\Column|Collection type_val
     * @property Grid\Column|Collection is_hot
     * @property Grid\Column|Collection dev
     * @property Grid\Column|Collection lottery_id
     * @property Grid\Column|Collection time
     * @property Grid\Column|Collection Issue
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection expect_time
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection money
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection bonus
     * @property Grid\Column|Collection rule_code
     * @property Grid\Column|Collection rule_name
     * @property Grid\Column|Collection rate
     * @property Grid\Column|Collection issue
     * @property Grid\Column|Collection lottery_time
     * @property Grid\Column|Collection rate_code
     * @property Grid\Column|Collection lottery_rule_group_id
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection deposit
     * @property Grid\Column|Collection withdrawal
     * @property Grid\Column|Collection bottom_pour
     * @property Grid\Column|Collection rebates
     * @property Grid\Column|Collection activity
     * @property Grid\Column|Collection addtime
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection last_login_time
     * @property Grid\Column|Collection coin
     * @property Grid\Column|Collection freeze_balance
     * @property Grid\Column|Collection balance
     * @property Grid\Column|Collection last_login_ip
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection total_money
     * @property Grid\Column|Collection withdrawal_amount
     * @property Grid\Column|Collection location
     * @property Grid\Column|Collection nicename
     * @property Grid\Column|Collection consumption
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection login_type
     * @property Grid\Column|Collection before_money
     * @property Grid\Column|Collection after_money
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection href
     * @property Grid\Column|Collection likes
     * @property Grid\Column|Collection views
     * @property Grid\Column|Collection comments
     * @property Grid\Column|Collection image_s
     * @property Grid\Column|Collection cate
     * @property Grid\Column|Collection img
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection start
     * @property Grid\Column|Collection end
     * @property Grid\Column|Collection adminid
     * @property Grid\Column|Collection admin
     * @property Grid\Column|Collection action
     * @property Grid\Column|Collection plat
     * @property Grid\Column|Collection list_order
     * @property Grid\Column|Collection app
     * @property Grid\Column|Collection controller
     * @property Grid\Column|Collection param
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection one_uid
     * @property Grid\Column|Collection one_profit
     * @property Grid\Column|Collection total
     * @property Grid\Column|Collection file_size
     * @property Grid\Column|Collection create_time
     * @property Grid\Column|Collection download_times
     * @property Grid\Column|Collection file_key
     * @property Grid\Column|Collection filename
     * @property Grid\Column|Collection file_path
     * @property Grid\Column|Collection file_md5
     * @property Grid\Column|Collection file_sha1
     * @property Grid\Column|Collection suffix
     * @property Grid\Column|Collection more
     * @property Grid\Column|Collection condition
     * @property Grid\Column|Collection giftid
     * @property Grid\Column|Collection nums
     * @property Grid\Column|Collection touid
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection bank_code
     * @property Grid\Column|Collection thumb
     * @property Grid\Column|Collection swf
     * @property Grid\Column|Collection swftime
     * @property Grid\Column|Collection needcoin
     * @property Grid\Column|Collection score
     * @property Grid\Column|Collection words
     * @property Grid\Column|Collection uptime
     * @property Grid\Column|Collection carid
     * @property Grid\Column|Collection endtime
     * @property Grid\Column|Collection account_bank
     * @property Grid\Column|Collection account
     * @property Grid\Column|Collection votes
     * @property Grid\Column|Collection orderno
     * @property Grid\Column|Collection trade_no
     * @property Grid\Column|Collection channel_name
     * @property Grid\Column|Collection pay_type
     * @property Grid\Column|Collection is_range
     * @property Grid\Column|Collection min_money
     * @property Grid\Column|Collection max_money
     * @property Grid\Column|Collection is_quick
     * @property Grid\Column|Collection quick_money
     * @property Grid\Column|Collection updatetime
     * @property Grid\Column|Collection shop_id
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection notify_url
     * @property Grid\Column|Collection return_url
     * @property Grid\Column|Collection function
     * @property Grid\Column|Collection del_status
     * @property Grid\Column|Collection bank_no
     * @property Grid\Column|Collection start_time
     * @property Grid\Column|Collection end_time
     * @property Grid\Column|Collection jump_type
     * @property Grid\Column|Collection user_channel_id
     * @property Grid\Column|Collection channel_id
     * @property Grid\Column|Collection remarks
     * @property Grid\Column|Collection coin_ios
     * @property Grid\Column|Collection product_id
     * @property Grid\Column|Collection give
     * @property Grid\Column|Collection coin_give
     * @property Grid\Column|Collection ambient
     * @property Grid\Column|Collection update_time
     * @property Grid\Column|Collection video_thumb
     * @property Grid\Column|Collection voice
     * @property Grid\Column|Collection length
     * @property Grid\Column|Collection isdel
     * @property Grid\Column|Collection xiajia_reason
     * @property Grid\Column|Collection lat
     * @property Grid\Column|Collection lng
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection fail_reason
     * @property Grid\Column|Collection show_val
     * @property Grid\Column|Collection recommend_val
     * @property Grid\Column|Collection labelid
     * @property Grid\Column|Collection dynamicid
     * @property Grid\Column|Collection commentid
     * @property Grid\Column|Collection parentid
     * @property Grid\Column|Collection isrecommend
     * @property Grid\Column|Collection use_nums
     * @property Grid\Column|Collection dynamic_type
     * @property Grid\Column|Collection badge
     * @property Grid\Column|Collection apply_pos
     * @property Grid\Column|Collection apply_side
     * @property Grid\Column|Collection briefing
     * @property Grid\Column|Collection carded
     * @property Grid\Column|Collection fullname
     * @property Grid\Column|Collection state
     * @property Grid\Column|Collection reason
     * @property Grid\Column|Collection disable
     * @property Grid\Column|Collection platform_extraction
     * @property Grid\Column|Collection divide_family
     * @property Grid\Column|Collection istip
     * @property Grid\Column|Collection familyid
     * @property Grid\Column|Collection profit_anthor
     * @property Grid\Column|Collection profit
     * @property Grid\Column|Collection signout
     * @property Grid\Column|Collection signout_reason
     * @property Grid\Column|Collection signout_istip
     * @property Grid\Column|Collection divide
     * @property Grid\Column|Collection liveuid
     * @property Grid\Column|Collection bankerid
     * @property Grid\Column|Collection starttime
     * @property Grid\Column|Collection result
     * @property Grid\Column|Collection banker_profit
     * @property Grid\Column|Collection banker_card
     * @property Grid\Column|Collection isintervene
     * @property Grid\Column|Collection ok
     * @property Grid\Column|Collection js
     * @property Grid\Column|Collection stop_time
     * @property Grid\Column|Collection 3fc_id
     * @property Grid\Column|Collection odds
     * @property Grid\Column|Collection is_ok
     * @property Grid\Column|Collection is_js
     * @property Grid\Column|Collection cat_id
     * @property Grid\Column|Collection show_name
     * @property Grid\Column|Collection short_name
     * @property Grid\Column|Collection type_name
     * @property Grid\Column|Collection hot
     * @property Grid\Column|Collection edittime
     * @property Grid\Column|Collection platform
     * @property Grid\Column|Collection rec_id
     * @property Grid\Column|Collection platform_code
     * @property Grid\Column|Collection game_name
     * @property Grid\Column|Collection game_type
     * @property Grid\Column|Collection user_login
     * @property Grid\Column|Collection bet_id
     * @property Grid\Column|Collection bet_time
     * @property Grid\Column|Collection bet_amount
     * @property Grid\Column|Collection pay_off
     * @property Grid\Column|Collection rate_status
     * @property Grid\Column|Collection cai_id
     * @property Grid\Column|Collection rate_name
     * @property Grid\Column|Collection order_id
     * @property Grid\Column|Collection cz_id
     * @property Grid\Column|Collection codes
     * @property Grid\Column|Collection prize_codes
     * @property Grid\Column|Collection expect
     * @property Grid\Column|Collection prize
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection gameid
     * @property Grid\Column|Collection coin_1
     * @property Grid\Column|Collection coin_2
     * @property Grid\Column|Collection coin_3
     * @property Grid\Column|Collection coin_4
     * @property Grid\Column|Collection coin_5
     * @property Grid\Column|Collection coin_6
     * @property Grid\Column|Collection times
     * @property Grid\Column|Collection mark
     * @property Grid\Column|Collection sid
     * @property Grid\Column|Collection giftname
     * @property Grid\Column|Collection gifticon
     * @property Grid\Column|Collection swftype
     * @property Grid\Column|Collection isplatgift
     * @property Grid\Column|Collection sticker_id
     * @property Grid\Column|Collection toy
     * @property Grid\Column|Collection isall
     * @property Grid\Column|Collection sortname
     * @property Grid\Column|Collection length_type
     * @property Grid\Column|Collection length_time
     * @property Grid\Column|Collection once
     * @property Grid\Column|Collection hook
     * @property Grid\Column|Collection plugin
     * @property Grid\Column|Collection levelid
     * @property Grid\Column|Collection level_up
     * @property Grid\Column|Collection rate_jackpot
     * @property Grid\Column|Collection reserved
     * @property Grid\Column|Collection colour
     * @property Grid\Column|Collection colour2
     * @property Grid\Column|Collection label
     * @property Grid\Column|Collection levelname
     * @property Grid\Column|Collection thumb_mark
     * @property Grid\Column|Collection bg
     * @property Grid\Column|Collection buytime
     * @property Grid\Column|Collection rating
     * @property Grid\Column|Collection target
     * @property Grid\Column|Collection rel
     * @property Grid\Column|Collection showid
     * @property Grid\Column|Collection islive
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection isvideo
     * @property Grid\Column|Collection wy_cid
     * @property Grid\Column|Collection goodnum
     * @property Grid\Column|Collection anyway
     * @property Grid\Column|Collection liveclassid
     * @property Grid\Column|Collection hotvotes
     * @property Grid\Column|Collection pkuid
     * @property Grid\Column|Collection pkstream
     * @property Grid\Column|Collection ismic
     * @property Grid\Column|Collection ishot
     * @property Grid\Column|Collection deviceinfo
     * @property Grid\Column|Collection language
     * @property Grid\Column|Collection game_action
     * @property Grid\Column|Collection banker_coin
     * @property Grid\Column|Collection isoff
     * @property Grid\Column|Collection offtime
     * @property Grid\Column|Collection recommend_time
     * @property Grid\Column|Collection c_id
     * @property Grid\Column|Collection c_type
     * @property Grid\Column|Collection isshop
     * @property Grid\Column|Collection reward_amount
     * @property Grid\Column|Collection superid
     * @property Grid\Column|Collection des
     * @property Grid\Column|Collection actionid
     * @property Grid\Column|Collection video_url
     * @property Grid\Column|Collection day
     * @property Grid\Column|Collection userid
     * @property Grid\Column|Collection to_userid
     * @property Grid\Column|Collection author
     * @property Grid\Column|Collection uploader
     * @property Grid\Column|Collection upload_type
     * @property Grid\Column|Collection img_url
     * @property Grid\Column|Collection file_url
     * @property Grid\Column|Collection classify_id
     * @property Grid\Column|Collection music_id
     * @property Grid\Column|Collection autoload
     * @property Grid\Column|Collection option_name
     * @property Grid\Column|Collection option_value
     * @property Grid\Column|Collection order_sn
     * @property Grid\Column|Collection third_order_sn
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection pay_status
     * @property Grid\Column|Collection payway
     * @property Grid\Column|Collection order_money
     * @property Grid\Column|Collection pay_money
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection postscript
     * @property Grid\Column|Collection charge_num
     * @property Grid\Column|Collection action_user
     * @property Grid\Column|Collection change_id
     * @property Grid\Column|Collection percent
     * @property Grid\Column|Collection src
     * @property Grid\Column|Collection notice
     * @property Grid\Column|Collection has_admin
     * @property Grid\Column|Collection demo_url
     * @property Grid\Column|Collection hooks
     * @property Grid\Column|Collection author_url
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection post_count
     * @property Grid\Column|Collection delete_time
     * @property Grid\Column|Collection seo_title
     * @property Grid\Column|Collection seo_keywords
     * @property Grid\Column|Collection seo_description
     * @property Grid\Column|Collection list_tpl
     * @property Grid\Column|Collection one_tpl
     * @property Grid\Column|Collection post_id
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection post_type
     * @property Grid\Column|Collection post_format
     * @property Grid\Column|Collection post_status
     * @property Grid\Column|Collection comment_status
     * @property Grid\Column|Collection is_top
     * @property Grid\Column|Collection recommended
     * @property Grid\Column|Collection post_hits
     * @property Grid\Column|Collection post_favorites
     * @property Grid\Column|Collection post_like
     * @property Grid\Column|Collection comment_count
     * @property Grid\Column|Collection published_time
     * @property Grid\Column|Collection post_title
     * @property Grid\Column|Collection post_keywords
     * @property Grid\Column|Collection post_excerpt
     * @property Grid\Column|Collection post_source
     * @property Grid\Column|Collection thumbnail
     * @property Grid\Column|Collection post_content
     * @property Grid\Column|Collection post_content_filtered
     * @property Grid\Column|Collection tag_id
     * @property Grid\Column|Collection object_id
     * @property Grid\Column|Collection table_name
     * @property Grid\Column|Collection type_grant
     * @property Grid\Column|Collection effecttime
     * @property Grid\Column|Collection coin_rob
     * @property Grid\Column|Collection nums_rob
     * @property Grid\Column|Collection redid
     * @property Grid\Column|Collection push_frequency
     * @property Grid\Column|Collection full_url
     * @property Grid\Column|Collection slide_id
     * @property Grid\Column|Collection push_key
     * @property Grid\Column|Collection play_key
     * @property Grid\Column|Collection play_time
     * @property Grid\Column|Collection push
     * @property Grid\Column|Collection play_key_switch
     * @property Grid\Column|Collection is_compiled
     * @property Grid\Column|Collection theme
     * @property Grid\Column|Collection lang
     * @property Grid\Column|Collection keywords
     * @property Grid\Column|Collection is_public
     * @property Grid\Column|Collection file
     * @property Grid\Column|Collection config_more
     * @property Grid\Column|Collection draft_more
     * @property Grid\Column|Collection iswin
     * @property Grid\Column|Collection logid
     * @property Grid\Column|Collection user_type
     * @property Grid\Column|Collection birthday
     * @property Grid\Column|Collection freeze_money
     * @property Grid\Column|Collection user_status
     * @property Grid\Column|Collection user_pass
     * @property Grid\Column|Collection user_nicename
     * @property Grid\Column|Collection back_img
     * @property Grid\Column|Collection avatar_thumb
     * @property Grid\Column|Collection signature
     * @property Grid\Column|Collection votestotal
     * @property Grid\Column|Collection iszombie
     * @property Grid\Column|Collection isrecord
     * @property Grid\Column|Collection iszombiep
     * @property Grid\Column|Collection issuper
     * @property Grid\Column|Collection source
     * @property Grid\Column|Collection end_bantime
     * @property Grid\Column|Collection count_money
     * @property Grid\Column|Collection count_Withdrawal
     * @property Grid\Column|Collection google_token
     * @property Grid\Column|Collection invite_code
     * @property Grid\Column|Collection invite_level
     * @property Grid\Column|Collection invite_key
     * @property Grid\Column|Collection is_dai
     * @property Grid\Column|Collection viewing_num
     * @property Grid\Column|Collection is_share
     * @property Grid\Column|Collection v_up_time
     * @property Grid\Column|Collection bat
     * @property Grid\Column|Collection qq
     * @property Grid\Column|Collection wechat
     * @property Grid\Column|Collection live_state
     * @property Grid\Column|Collection real_name
     * @property Grid\Column|Collection cer_no
     * @property Grid\Column|Collection front_view
     * @property Grid\Column|Collection back_view
     * @property Grid\Column|Collection handset_view
     * @property Grid\Column|Collection orderid
     * @property Grid\Column|Collection u_id
     * @property Grid\Column|Collection bank_logo
     * @property Grid\Column|Collection bank_id
     * @property Grid\Column|Collection bank_card
     * @property Grid\Column|Collection last_card
     * @property Grid\Column|Collection outlets
     * @property Grid\Column|Collection region
     * @property Grid\Column|Collection updatedtime
     * @property Grid\Column|Collection ban_reason
     * @property Grid\Column|Collection ban_long
     * @property Grid\Column|Collection change_type
     * @property Grid\Column|Collection next_money
     * @property Grid\Column|Collection change_money
     * @property Grid\Column|Collection service_charge
     * @property Grid\Column|Collection withdraw_type
     * @property Grid\Column|Collection withdraw_id
     * @property Grid\Column|Collection ded_status
     * @property Grid\Column|Collection contact_id
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection audit_time
     * @property Grid\Column|Collection examine_time
     * @property Grid\Column|Collection giftcount
     * @property Grid\Column|Collection totalcoin
     * @property Grid\Column|Collection schedule
     * @property Grid\Column|Collection reward
     * @property Grid\Column|Collection goodsid
     * @property Grid\Column|Collection goodsuid
     * @property Grid\Column|Collection time_format
     * @property Grid\Column|Collection money_passwd
     * @property Grid\Column|Collection wxpay_img
     * @property Grid\Column|Collection wxpay_account
     * @property Grid\Column|Collection pushid
     * @property Grid\Column|Collection bonus_day
     * @property Grid\Column|Collection bonus_time
     * @property Grid\Column|Collection count_day
     * @property Grid\Column|Collection expire_time
     * @property Grid\Column|Collection device_type
     * @property Grid\Column|Collection fromid
     * @property Grid\Column|Collection count
     * @property Grid\Column|Collection send_time
     * @property Grid\Column|Collection thumb_s
     * @property Grid\Column|Collection href_w
     * @property Grid\Column|Collection steps
     * @property Grid\Column|Collection shares
     * @property Grid\Column|Collection nopass_time
     * @property Grid\Column|Collection watch_ok
     * @property Grid\Column|Collection is_ad
     * @property Grid\Column|Collection ad_endtime
     * @property Grid\Column|Collection ad_url
     * @property Grid\Column|Collection classid
     * @property Grid\Column|Collection videoid
     * @property Grid\Column|Collection unchecked
     * @property Grid\Column|Collection checked
     * @property Grid\Column|Collection at_info
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection game_class_id(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection is_recommend(string $label = null)
     * @method Grid\Column|Collection image(string $label = null)
     * @method Grid\Column|Collection attempts(string $label = null)
     * @method Grid\Column|Collection reserved_at(string $label = null)
     * @method Grid\Column|Collection available_at(string $label = null)
     * @method Grid\Column|Collection is_video(string $label = null)
     * @method Grid\Column|Collection stream(string $label = null)
     * @method Grid\Column|Collection pull(string $label = null)
     * @method Grid\Column|Collection type_val(string $label = null)
     * @method Grid\Column|Collection is_hot(string $label = null)
     * @method Grid\Column|Collection dev(string $label = null)
     * @method Grid\Column|Collection lottery_id(string $label = null)
     * @method Grid\Column|Collection time(string $label = null)
     * @method Grid\Column|Collection Issue(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection expect_time(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection money(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection bonus(string $label = null)
     * @method Grid\Column|Collection rule_code(string $label = null)
     * @method Grid\Column|Collection rule_name(string $label = null)
     * @method Grid\Column|Collection rate(string $label = null)
     * @method Grid\Column|Collection issue(string $label = null)
     * @method Grid\Column|Collection lottery_time(string $label = null)
     * @method Grid\Column|Collection rate_code(string $label = null)
     * @method Grid\Column|Collection lottery_rule_group_id(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection deposit(string $label = null)
     * @method Grid\Column|Collection withdrawal(string $label = null)
     * @method Grid\Column|Collection bottom_pour(string $label = null)
     * @method Grid\Column|Collection rebates(string $label = null)
     * @method Grid\Column|Collection activity(string $label = null)
     * @method Grid\Column|Collection addtime(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection last_login_time(string $label = null)
     * @method Grid\Column|Collection coin(string $label = null)
     * @method Grid\Column|Collection freeze_balance(string $label = null)
     * @method Grid\Column|Collection balance(string $label = null)
     * @method Grid\Column|Collection last_login_ip(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection total_money(string $label = null)
     * @method Grid\Column|Collection withdrawal_amount(string $label = null)
     * @method Grid\Column|Collection location(string $label = null)
     * @method Grid\Column|Collection nicename(string $label = null)
     * @method Grid\Column|Collection consumption(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection login_type(string $label = null)
     * @method Grid\Column|Collection before_money(string $label = null)
     * @method Grid\Column|Collection after_money(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection href(string $label = null)
     * @method Grid\Column|Collection likes(string $label = null)
     * @method Grid\Column|Collection views(string $label = null)
     * @method Grid\Column|Collection comments(string $label = null)
     * @method Grid\Column|Collection image_s(string $label = null)
     * @method Grid\Column|Collection cate(string $label = null)
     * @method Grid\Column|Collection img(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection start(string $label = null)
     * @method Grid\Column|Collection end(string $label = null)
     * @method Grid\Column|Collection adminid(string $label = null)
     * @method Grid\Column|Collection admin(string $label = null)
     * @method Grid\Column|Collection action(string $label = null)
     * @method Grid\Column|Collection plat(string $label = null)
     * @method Grid\Column|Collection list_order(string $label = null)
     * @method Grid\Column|Collection app(string $label = null)
     * @method Grid\Column|Collection controller(string $label = null)
     * @method Grid\Column|Collection param(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection one_uid(string $label = null)
     * @method Grid\Column|Collection one_profit(string $label = null)
     * @method Grid\Column|Collection total(string $label = null)
     * @method Grid\Column|Collection file_size(string $label = null)
     * @method Grid\Column|Collection create_time(string $label = null)
     * @method Grid\Column|Collection download_times(string $label = null)
     * @method Grid\Column|Collection file_key(string $label = null)
     * @method Grid\Column|Collection filename(string $label = null)
     * @method Grid\Column|Collection file_path(string $label = null)
     * @method Grid\Column|Collection file_md5(string $label = null)
     * @method Grid\Column|Collection file_sha1(string $label = null)
     * @method Grid\Column|Collection suffix(string $label = null)
     * @method Grid\Column|Collection more(string $label = null)
     * @method Grid\Column|Collection condition(string $label = null)
     * @method Grid\Column|Collection giftid(string $label = null)
     * @method Grid\Column|Collection nums(string $label = null)
     * @method Grid\Column|Collection touid(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection bank_code(string $label = null)
     * @method Grid\Column|Collection thumb(string $label = null)
     * @method Grid\Column|Collection swf(string $label = null)
     * @method Grid\Column|Collection swftime(string $label = null)
     * @method Grid\Column|Collection needcoin(string $label = null)
     * @method Grid\Column|Collection score(string $label = null)
     * @method Grid\Column|Collection words(string $label = null)
     * @method Grid\Column|Collection uptime(string $label = null)
     * @method Grid\Column|Collection carid(string $label = null)
     * @method Grid\Column|Collection endtime(string $label = null)
     * @method Grid\Column|Collection account_bank(string $label = null)
     * @method Grid\Column|Collection account(string $label = null)
     * @method Grid\Column|Collection votes(string $label = null)
     * @method Grid\Column|Collection orderno(string $label = null)
     * @method Grid\Column|Collection trade_no(string $label = null)
     * @method Grid\Column|Collection channel_name(string $label = null)
     * @method Grid\Column|Collection pay_type(string $label = null)
     * @method Grid\Column|Collection is_range(string $label = null)
     * @method Grid\Column|Collection min_money(string $label = null)
     * @method Grid\Column|Collection max_money(string $label = null)
     * @method Grid\Column|Collection is_quick(string $label = null)
     * @method Grid\Column|Collection quick_money(string $label = null)
     * @method Grid\Column|Collection updatetime(string $label = null)
     * @method Grid\Column|Collection shop_id(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection notify_url(string $label = null)
     * @method Grid\Column|Collection return_url(string $label = null)
     * @method Grid\Column|Collection function(string $label = null)
     * @method Grid\Column|Collection del_status(string $label = null)
     * @method Grid\Column|Collection bank_no(string $label = null)
     * @method Grid\Column|Collection start_time(string $label = null)
     * @method Grid\Column|Collection end_time(string $label = null)
     * @method Grid\Column|Collection jump_type(string $label = null)
     * @method Grid\Column|Collection user_channel_id(string $label = null)
     * @method Grid\Column|Collection channel_id(string $label = null)
     * @method Grid\Column|Collection remarks(string $label = null)
     * @method Grid\Column|Collection coin_ios(string $label = null)
     * @method Grid\Column|Collection product_id(string $label = null)
     * @method Grid\Column|Collection give(string $label = null)
     * @method Grid\Column|Collection coin_give(string $label = null)
     * @method Grid\Column|Collection ambient(string $label = null)
     * @method Grid\Column|Collection update_time(string $label = null)
     * @method Grid\Column|Collection video_thumb(string $label = null)
     * @method Grid\Column|Collection voice(string $label = null)
     * @method Grid\Column|Collection length(string $label = null)
     * @method Grid\Column|Collection isdel(string $label = null)
     * @method Grid\Column|Collection xiajia_reason(string $label = null)
     * @method Grid\Column|Collection lat(string $label = null)
     * @method Grid\Column|Collection lng(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection fail_reason(string $label = null)
     * @method Grid\Column|Collection show_val(string $label = null)
     * @method Grid\Column|Collection recommend_val(string $label = null)
     * @method Grid\Column|Collection labelid(string $label = null)
     * @method Grid\Column|Collection dynamicid(string $label = null)
     * @method Grid\Column|Collection commentid(string $label = null)
     * @method Grid\Column|Collection parentid(string $label = null)
     * @method Grid\Column|Collection isrecommend(string $label = null)
     * @method Grid\Column|Collection use_nums(string $label = null)
     * @method Grid\Column|Collection dynamic_type(string $label = null)
     * @method Grid\Column|Collection badge(string $label = null)
     * @method Grid\Column|Collection apply_pos(string $label = null)
     * @method Grid\Column|Collection apply_side(string $label = null)
     * @method Grid\Column|Collection briefing(string $label = null)
     * @method Grid\Column|Collection carded(string $label = null)
     * @method Grid\Column|Collection fullname(string $label = null)
     * @method Grid\Column|Collection state(string $label = null)
     * @method Grid\Column|Collection reason(string $label = null)
     * @method Grid\Column|Collection disable(string $label = null)
     * @method Grid\Column|Collection platform_extraction(string $label = null)
     * @method Grid\Column|Collection divide_family(string $label = null)
     * @method Grid\Column|Collection istip(string $label = null)
     * @method Grid\Column|Collection familyid(string $label = null)
     * @method Grid\Column|Collection profit_anthor(string $label = null)
     * @method Grid\Column|Collection profit(string $label = null)
     * @method Grid\Column|Collection signout(string $label = null)
     * @method Grid\Column|Collection signout_reason(string $label = null)
     * @method Grid\Column|Collection signout_istip(string $label = null)
     * @method Grid\Column|Collection divide(string $label = null)
     * @method Grid\Column|Collection liveuid(string $label = null)
     * @method Grid\Column|Collection bankerid(string $label = null)
     * @method Grid\Column|Collection starttime(string $label = null)
     * @method Grid\Column|Collection result(string $label = null)
     * @method Grid\Column|Collection banker_profit(string $label = null)
     * @method Grid\Column|Collection banker_card(string $label = null)
     * @method Grid\Column|Collection isintervene(string $label = null)
     * @method Grid\Column|Collection ok(string $label = null)
     * @method Grid\Column|Collection js(string $label = null)
     * @method Grid\Column|Collection stop_time(string $label = null)
     * @method Grid\Column|Collection 3fc_id(string $label = null)
     * @method Grid\Column|Collection odds(string $label = null)
     * @method Grid\Column|Collection is_ok(string $label = null)
     * @method Grid\Column|Collection is_js(string $label = null)
     * @method Grid\Column|Collection cat_id(string $label = null)
     * @method Grid\Column|Collection show_name(string $label = null)
     * @method Grid\Column|Collection short_name(string $label = null)
     * @method Grid\Column|Collection type_name(string $label = null)
     * @method Grid\Column|Collection hot(string $label = null)
     * @method Grid\Column|Collection edittime(string $label = null)
     * @method Grid\Column|Collection platform(string $label = null)
     * @method Grid\Column|Collection rec_id(string $label = null)
     * @method Grid\Column|Collection platform_code(string $label = null)
     * @method Grid\Column|Collection game_name(string $label = null)
     * @method Grid\Column|Collection game_type(string $label = null)
     * @method Grid\Column|Collection user_login(string $label = null)
     * @method Grid\Column|Collection bet_id(string $label = null)
     * @method Grid\Column|Collection bet_time(string $label = null)
     * @method Grid\Column|Collection bet_amount(string $label = null)
     * @method Grid\Column|Collection pay_off(string $label = null)
     * @method Grid\Column|Collection rate_status(string $label = null)
     * @method Grid\Column|Collection cai_id(string $label = null)
     * @method Grid\Column|Collection rate_name(string $label = null)
     * @method Grid\Column|Collection order_id(string $label = null)
     * @method Grid\Column|Collection cz_id(string $label = null)
     * @method Grid\Column|Collection codes(string $label = null)
     * @method Grid\Column|Collection prize_codes(string $label = null)
     * @method Grid\Column|Collection expect(string $label = null)
     * @method Grid\Column|Collection prize(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection gameid(string $label = null)
     * @method Grid\Column|Collection coin_1(string $label = null)
     * @method Grid\Column|Collection coin_2(string $label = null)
     * @method Grid\Column|Collection coin_3(string $label = null)
     * @method Grid\Column|Collection coin_4(string $label = null)
     * @method Grid\Column|Collection coin_5(string $label = null)
     * @method Grid\Column|Collection coin_6(string $label = null)
     * @method Grid\Column|Collection times(string $label = null)
     * @method Grid\Column|Collection mark(string $label = null)
     * @method Grid\Column|Collection sid(string $label = null)
     * @method Grid\Column|Collection giftname(string $label = null)
     * @method Grid\Column|Collection gifticon(string $label = null)
     * @method Grid\Column|Collection swftype(string $label = null)
     * @method Grid\Column|Collection isplatgift(string $label = null)
     * @method Grid\Column|Collection sticker_id(string $label = null)
     * @method Grid\Column|Collection toy(string $label = null)
     * @method Grid\Column|Collection isall(string $label = null)
     * @method Grid\Column|Collection sortname(string $label = null)
     * @method Grid\Column|Collection length_type(string $label = null)
     * @method Grid\Column|Collection length_time(string $label = null)
     * @method Grid\Column|Collection once(string $label = null)
     * @method Grid\Column|Collection hook(string $label = null)
     * @method Grid\Column|Collection plugin(string $label = null)
     * @method Grid\Column|Collection levelid(string $label = null)
     * @method Grid\Column|Collection level_up(string $label = null)
     * @method Grid\Column|Collection rate_jackpot(string $label = null)
     * @method Grid\Column|Collection reserved(string $label = null)
     * @method Grid\Column|Collection colour(string $label = null)
     * @method Grid\Column|Collection colour2(string $label = null)
     * @method Grid\Column|Collection label(string $label = null)
     * @method Grid\Column|Collection levelname(string $label = null)
     * @method Grid\Column|Collection thumb_mark(string $label = null)
     * @method Grid\Column|Collection bg(string $label = null)
     * @method Grid\Column|Collection buytime(string $label = null)
     * @method Grid\Column|Collection rating(string $label = null)
     * @method Grid\Column|Collection target(string $label = null)
     * @method Grid\Column|Collection rel(string $label = null)
     * @method Grid\Column|Collection showid(string $label = null)
     * @method Grid\Column|Collection islive(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection isvideo(string $label = null)
     * @method Grid\Column|Collection wy_cid(string $label = null)
     * @method Grid\Column|Collection goodnum(string $label = null)
     * @method Grid\Column|Collection anyway(string $label = null)
     * @method Grid\Column|Collection liveclassid(string $label = null)
     * @method Grid\Column|Collection hotvotes(string $label = null)
     * @method Grid\Column|Collection pkuid(string $label = null)
     * @method Grid\Column|Collection pkstream(string $label = null)
     * @method Grid\Column|Collection ismic(string $label = null)
     * @method Grid\Column|Collection ishot(string $label = null)
     * @method Grid\Column|Collection deviceinfo(string $label = null)
     * @method Grid\Column|Collection language(string $label = null)
     * @method Grid\Column|Collection game_action(string $label = null)
     * @method Grid\Column|Collection banker_coin(string $label = null)
     * @method Grid\Column|Collection isoff(string $label = null)
     * @method Grid\Column|Collection offtime(string $label = null)
     * @method Grid\Column|Collection recommend_time(string $label = null)
     * @method Grid\Column|Collection c_id(string $label = null)
     * @method Grid\Column|Collection c_type(string $label = null)
     * @method Grid\Column|Collection isshop(string $label = null)
     * @method Grid\Column|Collection reward_amount(string $label = null)
     * @method Grid\Column|Collection superid(string $label = null)
     * @method Grid\Column|Collection des(string $label = null)
     * @method Grid\Column|Collection actionid(string $label = null)
     * @method Grid\Column|Collection video_url(string $label = null)
     * @method Grid\Column|Collection day(string $label = null)
     * @method Grid\Column|Collection userid(string $label = null)
     * @method Grid\Column|Collection to_userid(string $label = null)
     * @method Grid\Column|Collection author(string $label = null)
     * @method Grid\Column|Collection uploader(string $label = null)
     * @method Grid\Column|Collection upload_type(string $label = null)
     * @method Grid\Column|Collection img_url(string $label = null)
     * @method Grid\Column|Collection file_url(string $label = null)
     * @method Grid\Column|Collection classify_id(string $label = null)
     * @method Grid\Column|Collection music_id(string $label = null)
     * @method Grid\Column|Collection autoload(string $label = null)
     * @method Grid\Column|Collection option_name(string $label = null)
     * @method Grid\Column|Collection option_value(string $label = null)
     * @method Grid\Column|Collection order_sn(string $label = null)
     * @method Grid\Column|Collection third_order_sn(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection pay_status(string $label = null)
     * @method Grid\Column|Collection payway(string $label = null)
     * @method Grid\Column|Collection order_money(string $label = null)
     * @method Grid\Column|Collection pay_money(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection postscript(string $label = null)
     * @method Grid\Column|Collection charge_num(string $label = null)
     * @method Grid\Column|Collection action_user(string $label = null)
     * @method Grid\Column|Collection change_id(string $label = null)
     * @method Grid\Column|Collection percent(string $label = null)
     * @method Grid\Column|Collection src(string $label = null)
     * @method Grid\Column|Collection notice(string $label = null)
     * @method Grid\Column|Collection has_admin(string $label = null)
     * @method Grid\Column|Collection demo_url(string $label = null)
     * @method Grid\Column|Collection hooks(string $label = null)
     * @method Grid\Column|Collection author_url(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection post_count(string $label = null)
     * @method Grid\Column|Collection delete_time(string $label = null)
     * @method Grid\Column|Collection seo_title(string $label = null)
     * @method Grid\Column|Collection seo_keywords(string $label = null)
     * @method Grid\Column|Collection seo_description(string $label = null)
     * @method Grid\Column|Collection list_tpl(string $label = null)
     * @method Grid\Column|Collection one_tpl(string $label = null)
     * @method Grid\Column|Collection post_id(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection post_type(string $label = null)
     * @method Grid\Column|Collection post_format(string $label = null)
     * @method Grid\Column|Collection post_status(string $label = null)
     * @method Grid\Column|Collection comment_status(string $label = null)
     * @method Grid\Column|Collection is_top(string $label = null)
     * @method Grid\Column|Collection recommended(string $label = null)
     * @method Grid\Column|Collection post_hits(string $label = null)
     * @method Grid\Column|Collection post_favorites(string $label = null)
     * @method Grid\Column|Collection post_like(string $label = null)
     * @method Grid\Column|Collection comment_count(string $label = null)
     * @method Grid\Column|Collection published_time(string $label = null)
     * @method Grid\Column|Collection post_title(string $label = null)
     * @method Grid\Column|Collection post_keywords(string $label = null)
     * @method Grid\Column|Collection post_excerpt(string $label = null)
     * @method Grid\Column|Collection post_source(string $label = null)
     * @method Grid\Column|Collection thumbnail(string $label = null)
     * @method Grid\Column|Collection post_content(string $label = null)
     * @method Grid\Column|Collection post_content_filtered(string $label = null)
     * @method Grid\Column|Collection tag_id(string $label = null)
     * @method Grid\Column|Collection object_id(string $label = null)
     * @method Grid\Column|Collection table_name(string $label = null)
     * @method Grid\Column|Collection type_grant(string $label = null)
     * @method Grid\Column|Collection effecttime(string $label = null)
     * @method Grid\Column|Collection coin_rob(string $label = null)
     * @method Grid\Column|Collection nums_rob(string $label = null)
     * @method Grid\Column|Collection redid(string $label = null)
     * @method Grid\Column|Collection push_frequency(string $label = null)
     * @method Grid\Column|Collection full_url(string $label = null)
     * @method Grid\Column|Collection slide_id(string $label = null)
     * @method Grid\Column|Collection push_key(string $label = null)
     * @method Grid\Column|Collection play_key(string $label = null)
     * @method Grid\Column|Collection play_time(string $label = null)
     * @method Grid\Column|Collection push(string $label = null)
     * @method Grid\Column|Collection play_key_switch(string $label = null)
     * @method Grid\Column|Collection is_compiled(string $label = null)
     * @method Grid\Column|Collection theme(string $label = null)
     * @method Grid\Column|Collection lang(string $label = null)
     * @method Grid\Column|Collection keywords(string $label = null)
     * @method Grid\Column|Collection is_public(string $label = null)
     * @method Grid\Column|Collection file(string $label = null)
     * @method Grid\Column|Collection config_more(string $label = null)
     * @method Grid\Column|Collection draft_more(string $label = null)
     * @method Grid\Column|Collection iswin(string $label = null)
     * @method Grid\Column|Collection logid(string $label = null)
     * @method Grid\Column|Collection user_type(string $label = null)
     * @method Grid\Column|Collection birthday(string $label = null)
     * @method Grid\Column|Collection freeze_money(string $label = null)
     * @method Grid\Column|Collection user_status(string $label = null)
     * @method Grid\Column|Collection user_pass(string $label = null)
     * @method Grid\Column|Collection user_nicename(string $label = null)
     * @method Grid\Column|Collection back_img(string $label = null)
     * @method Grid\Column|Collection avatar_thumb(string $label = null)
     * @method Grid\Column|Collection signature(string $label = null)
     * @method Grid\Column|Collection votestotal(string $label = null)
     * @method Grid\Column|Collection iszombie(string $label = null)
     * @method Grid\Column|Collection isrecord(string $label = null)
     * @method Grid\Column|Collection iszombiep(string $label = null)
     * @method Grid\Column|Collection issuper(string $label = null)
     * @method Grid\Column|Collection source(string $label = null)
     * @method Grid\Column|Collection end_bantime(string $label = null)
     * @method Grid\Column|Collection count_money(string $label = null)
     * @method Grid\Column|Collection count_Withdrawal(string $label = null)
     * @method Grid\Column|Collection google_token(string $label = null)
     * @method Grid\Column|Collection invite_code(string $label = null)
     * @method Grid\Column|Collection invite_level(string $label = null)
     * @method Grid\Column|Collection invite_key(string $label = null)
     * @method Grid\Column|Collection is_dai(string $label = null)
     * @method Grid\Column|Collection viewing_num(string $label = null)
     * @method Grid\Column|Collection is_share(string $label = null)
     * @method Grid\Column|Collection v_up_time(string $label = null)
     * @method Grid\Column|Collection bat(string $label = null)
     * @method Grid\Column|Collection qq(string $label = null)
     * @method Grid\Column|Collection wechat(string $label = null)
     * @method Grid\Column|Collection live_state(string $label = null)
     * @method Grid\Column|Collection real_name(string $label = null)
     * @method Grid\Column|Collection cer_no(string $label = null)
     * @method Grid\Column|Collection front_view(string $label = null)
     * @method Grid\Column|Collection back_view(string $label = null)
     * @method Grid\Column|Collection handset_view(string $label = null)
     * @method Grid\Column|Collection orderid(string $label = null)
     * @method Grid\Column|Collection u_id(string $label = null)
     * @method Grid\Column|Collection bank_logo(string $label = null)
     * @method Grid\Column|Collection bank_id(string $label = null)
     * @method Grid\Column|Collection bank_card(string $label = null)
     * @method Grid\Column|Collection last_card(string $label = null)
     * @method Grid\Column|Collection outlets(string $label = null)
     * @method Grid\Column|Collection region(string $label = null)
     * @method Grid\Column|Collection updatedtime(string $label = null)
     * @method Grid\Column|Collection ban_reason(string $label = null)
     * @method Grid\Column|Collection ban_long(string $label = null)
     * @method Grid\Column|Collection change_type(string $label = null)
     * @method Grid\Column|Collection next_money(string $label = null)
     * @method Grid\Column|Collection change_money(string $label = null)
     * @method Grid\Column|Collection service_charge(string $label = null)
     * @method Grid\Column|Collection withdraw_type(string $label = null)
     * @method Grid\Column|Collection withdraw_id(string $label = null)
     * @method Grid\Column|Collection ded_status(string $label = null)
     * @method Grid\Column|Collection contact_id(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection audit_time(string $label = null)
     * @method Grid\Column|Collection examine_time(string $label = null)
     * @method Grid\Column|Collection giftcount(string $label = null)
     * @method Grid\Column|Collection totalcoin(string $label = null)
     * @method Grid\Column|Collection schedule(string $label = null)
     * @method Grid\Column|Collection reward(string $label = null)
     * @method Grid\Column|Collection goodsid(string $label = null)
     * @method Grid\Column|Collection goodsuid(string $label = null)
     * @method Grid\Column|Collection time_format(string $label = null)
     * @method Grid\Column|Collection money_passwd(string $label = null)
     * @method Grid\Column|Collection wxpay_img(string $label = null)
     * @method Grid\Column|Collection wxpay_account(string $label = null)
     * @method Grid\Column|Collection pushid(string $label = null)
     * @method Grid\Column|Collection bonus_day(string $label = null)
     * @method Grid\Column|Collection bonus_time(string $label = null)
     * @method Grid\Column|Collection count_day(string $label = null)
     * @method Grid\Column|Collection expire_time(string $label = null)
     * @method Grid\Column|Collection device_type(string $label = null)
     * @method Grid\Column|Collection fromid(string $label = null)
     * @method Grid\Column|Collection count(string $label = null)
     * @method Grid\Column|Collection send_time(string $label = null)
     * @method Grid\Column|Collection thumb_s(string $label = null)
     * @method Grid\Column|Collection href_w(string $label = null)
     * @method Grid\Column|Collection steps(string $label = null)
     * @method Grid\Column|Collection shares(string $label = null)
     * @method Grid\Column|Collection nopass_time(string $label = null)
     * @method Grid\Column|Collection watch_ok(string $label = null)
     * @method Grid\Column|Collection is_ad(string $label = null)
     * @method Grid\Column|Collection ad_endtime(string $label = null)
     * @method Grid\Column|Collection ad_url(string $label = null)
     * @method Grid\Column|Collection classid(string $label = null)
     * @method Grid\Column|Collection videoid(string $label = null)
     * @method Grid\Column|Collection unchecked(string $label = null)
     * @method Grid\Column|Collection checked(string $label = null)
     * @method Grid\Column|Collection at_info(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection path
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection game_class_id
     * @property Show\Field|Collection code
     * @property Show\Field|Collection status
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection is_recommend
     * @property Show\Field|Collection image
     * @property Show\Field|Collection attempts
     * @property Show\Field|Collection reserved_at
     * @property Show\Field|Collection available_at
     * @property Show\Field|Collection is_video
     * @property Show\Field|Collection stream
     * @property Show\Field|Collection pull
     * @property Show\Field|Collection type_val
     * @property Show\Field|Collection is_hot
     * @property Show\Field|Collection dev
     * @property Show\Field|Collection lottery_id
     * @property Show\Field|Collection time
     * @property Show\Field|Collection Issue
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection expect_time
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection money
     * @property Show\Field|Collection content
     * @property Show\Field|Collection bonus
     * @property Show\Field|Collection rule_code
     * @property Show\Field|Collection rule_name
     * @property Show\Field|Collection rate
     * @property Show\Field|Collection issue
     * @property Show\Field|Collection lottery_time
     * @property Show\Field|Collection rate_code
     * @property Show\Field|Collection lottery_rule_group_id
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection deposit
     * @property Show\Field|Collection withdrawal
     * @property Show\Field|Collection bottom_pour
     * @property Show\Field|Collection rebates
     * @property Show\Field|Collection activity
     * @property Show\Field|Collection addtime
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection last_login_time
     * @property Show\Field|Collection coin
     * @property Show\Field|Collection freeze_balance
     * @property Show\Field|Collection balance
     * @property Show\Field|Collection last_login_ip
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection total_money
     * @property Show\Field|Collection withdrawal_amount
     * @property Show\Field|Collection location
     * @property Show\Field|Collection nicename
     * @property Show\Field|Collection consumption
     * @property Show\Field|Collection level
     * @property Show\Field|Collection login_type
     * @property Show\Field|Collection before_money
     * @property Show\Field|Collection after_money
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection href
     * @property Show\Field|Collection likes
     * @property Show\Field|Collection views
     * @property Show\Field|Collection comments
     * @property Show\Field|Collection image_s
     * @property Show\Field|Collection cate
     * @property Show\Field|Collection img
     * @property Show\Field|Collection url
     * @property Show\Field|Collection start
     * @property Show\Field|Collection end
     * @property Show\Field|Collection adminid
     * @property Show\Field|Collection admin
     * @property Show\Field|Collection action
     * @property Show\Field|Collection plat
     * @property Show\Field|Collection list_order
     * @property Show\Field|Collection app
     * @property Show\Field|Collection controller
     * @property Show\Field|Collection param
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection one_uid
     * @property Show\Field|Collection one_profit
     * @property Show\Field|Collection total
     * @property Show\Field|Collection file_size
     * @property Show\Field|Collection create_time
     * @property Show\Field|Collection download_times
     * @property Show\Field|Collection file_key
     * @property Show\Field|Collection filename
     * @property Show\Field|Collection file_path
     * @property Show\Field|Collection file_md5
     * @property Show\Field|Collection file_sha1
     * @property Show\Field|Collection suffix
     * @property Show\Field|Collection more
     * @property Show\Field|Collection condition
     * @property Show\Field|Collection giftid
     * @property Show\Field|Collection nums
     * @property Show\Field|Collection touid
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection bank_code
     * @property Show\Field|Collection thumb
     * @property Show\Field|Collection swf
     * @property Show\Field|Collection swftime
     * @property Show\Field|Collection needcoin
     * @property Show\Field|Collection score
     * @property Show\Field|Collection words
     * @property Show\Field|Collection uptime
     * @property Show\Field|Collection carid
     * @property Show\Field|Collection endtime
     * @property Show\Field|Collection account_bank
     * @property Show\Field|Collection account
     * @property Show\Field|Collection votes
     * @property Show\Field|Collection orderno
     * @property Show\Field|Collection trade_no
     * @property Show\Field|Collection channel_name
     * @property Show\Field|Collection pay_type
     * @property Show\Field|Collection is_range
     * @property Show\Field|Collection min_money
     * @property Show\Field|Collection max_money
     * @property Show\Field|Collection is_quick
     * @property Show\Field|Collection quick_money
     * @property Show\Field|Collection updatetime
     * @property Show\Field|Collection shop_id
     * @property Show\Field|Collection key
     * @property Show\Field|Collection notify_url
     * @property Show\Field|Collection return_url
     * @property Show\Field|Collection function
     * @property Show\Field|Collection del_status
     * @property Show\Field|Collection bank_no
     * @property Show\Field|Collection start_time
     * @property Show\Field|Collection end_time
     * @property Show\Field|Collection jump_type
     * @property Show\Field|Collection user_channel_id
     * @property Show\Field|Collection channel_id
     * @property Show\Field|Collection remarks
     * @property Show\Field|Collection coin_ios
     * @property Show\Field|Collection product_id
     * @property Show\Field|Collection give
     * @property Show\Field|Collection coin_give
     * @property Show\Field|Collection ambient
     * @property Show\Field|Collection update_time
     * @property Show\Field|Collection video_thumb
     * @property Show\Field|Collection voice
     * @property Show\Field|Collection length
     * @property Show\Field|Collection isdel
     * @property Show\Field|Collection xiajia_reason
     * @property Show\Field|Collection lat
     * @property Show\Field|Collection lng
     * @property Show\Field|Collection city
     * @property Show\Field|Collection address
     * @property Show\Field|Collection fail_reason
     * @property Show\Field|Collection show_val
     * @property Show\Field|Collection recommend_val
     * @property Show\Field|Collection labelid
     * @property Show\Field|Collection dynamicid
     * @property Show\Field|Collection commentid
     * @property Show\Field|Collection parentid
     * @property Show\Field|Collection isrecommend
     * @property Show\Field|Collection use_nums
     * @property Show\Field|Collection dynamic_type
     * @property Show\Field|Collection badge
     * @property Show\Field|Collection apply_pos
     * @property Show\Field|Collection apply_side
     * @property Show\Field|Collection briefing
     * @property Show\Field|Collection carded
     * @property Show\Field|Collection fullname
     * @property Show\Field|Collection state
     * @property Show\Field|Collection reason
     * @property Show\Field|Collection disable
     * @property Show\Field|Collection platform_extraction
     * @property Show\Field|Collection divide_family
     * @property Show\Field|Collection istip
     * @property Show\Field|Collection familyid
     * @property Show\Field|Collection profit_anthor
     * @property Show\Field|Collection profit
     * @property Show\Field|Collection signout
     * @property Show\Field|Collection signout_reason
     * @property Show\Field|Collection signout_istip
     * @property Show\Field|Collection divide
     * @property Show\Field|Collection liveuid
     * @property Show\Field|Collection bankerid
     * @property Show\Field|Collection starttime
     * @property Show\Field|Collection result
     * @property Show\Field|Collection banker_profit
     * @property Show\Field|Collection banker_card
     * @property Show\Field|Collection isintervene
     * @property Show\Field|Collection ok
     * @property Show\Field|Collection js
     * @property Show\Field|Collection stop_time
     * @property Show\Field|Collection 3fc_id
     * @property Show\Field|Collection odds
     * @property Show\Field|Collection is_ok
     * @property Show\Field|Collection is_js
     * @property Show\Field|Collection cat_id
     * @property Show\Field|Collection show_name
     * @property Show\Field|Collection short_name
     * @property Show\Field|Collection type_name
     * @property Show\Field|Collection hot
     * @property Show\Field|Collection edittime
     * @property Show\Field|Collection platform
     * @property Show\Field|Collection rec_id
     * @property Show\Field|Collection platform_code
     * @property Show\Field|Collection game_name
     * @property Show\Field|Collection game_type
     * @property Show\Field|Collection user_login
     * @property Show\Field|Collection bet_id
     * @property Show\Field|Collection bet_time
     * @property Show\Field|Collection bet_amount
     * @property Show\Field|Collection pay_off
     * @property Show\Field|Collection rate_status
     * @property Show\Field|Collection cai_id
     * @property Show\Field|Collection rate_name
     * @property Show\Field|Collection order_id
     * @property Show\Field|Collection cz_id
     * @property Show\Field|Collection codes
     * @property Show\Field|Collection prize_codes
     * @property Show\Field|Collection expect
     * @property Show\Field|Collection prize
     * @property Show\Field|Collection date
     * @property Show\Field|Collection gameid
     * @property Show\Field|Collection coin_1
     * @property Show\Field|Collection coin_2
     * @property Show\Field|Collection coin_3
     * @property Show\Field|Collection coin_4
     * @property Show\Field|Collection coin_5
     * @property Show\Field|Collection coin_6
     * @property Show\Field|Collection times
     * @property Show\Field|Collection mark
     * @property Show\Field|Collection sid
     * @property Show\Field|Collection giftname
     * @property Show\Field|Collection gifticon
     * @property Show\Field|Collection swftype
     * @property Show\Field|Collection isplatgift
     * @property Show\Field|Collection sticker_id
     * @property Show\Field|Collection toy
     * @property Show\Field|Collection isall
     * @property Show\Field|Collection sortname
     * @property Show\Field|Collection length_type
     * @property Show\Field|Collection length_time
     * @property Show\Field|Collection once
     * @property Show\Field|Collection hook
     * @property Show\Field|Collection plugin
     * @property Show\Field|Collection levelid
     * @property Show\Field|Collection level_up
     * @property Show\Field|Collection rate_jackpot
     * @property Show\Field|Collection reserved
     * @property Show\Field|Collection colour
     * @property Show\Field|Collection colour2
     * @property Show\Field|Collection label
     * @property Show\Field|Collection levelname
     * @property Show\Field|Collection thumb_mark
     * @property Show\Field|Collection bg
     * @property Show\Field|Collection buytime
     * @property Show\Field|Collection rating
     * @property Show\Field|Collection target
     * @property Show\Field|Collection rel
     * @property Show\Field|Collection showid
     * @property Show\Field|Collection islive
     * @property Show\Field|Collection province
     * @property Show\Field|Collection isvideo
     * @property Show\Field|Collection wy_cid
     * @property Show\Field|Collection goodnum
     * @property Show\Field|Collection anyway
     * @property Show\Field|Collection liveclassid
     * @property Show\Field|Collection hotvotes
     * @property Show\Field|Collection pkuid
     * @property Show\Field|Collection pkstream
     * @property Show\Field|Collection ismic
     * @property Show\Field|Collection ishot
     * @property Show\Field|Collection deviceinfo
     * @property Show\Field|Collection language
     * @property Show\Field|Collection game_action
     * @property Show\Field|Collection banker_coin
     * @property Show\Field|Collection isoff
     * @property Show\Field|Collection offtime
     * @property Show\Field|Collection recommend_time
     * @property Show\Field|Collection c_id
     * @property Show\Field|Collection c_type
     * @property Show\Field|Collection isshop
     * @property Show\Field|Collection reward_amount
     * @property Show\Field|Collection superid
     * @property Show\Field|Collection des
     * @property Show\Field|Collection actionid
     * @property Show\Field|Collection video_url
     * @property Show\Field|Collection day
     * @property Show\Field|Collection userid
     * @property Show\Field|Collection to_userid
     * @property Show\Field|Collection author
     * @property Show\Field|Collection uploader
     * @property Show\Field|Collection upload_type
     * @property Show\Field|Collection img_url
     * @property Show\Field|Collection file_url
     * @property Show\Field|Collection classify_id
     * @property Show\Field|Collection music_id
     * @property Show\Field|Collection autoload
     * @property Show\Field|Collection option_name
     * @property Show\Field|Collection option_value
     * @property Show\Field|Collection order_sn
     * @property Show\Field|Collection third_order_sn
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection pay_status
     * @property Show\Field|Collection payway
     * @property Show\Field|Collection order_money
     * @property Show\Field|Collection pay_money
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection postscript
     * @property Show\Field|Collection charge_num
     * @property Show\Field|Collection action_user
     * @property Show\Field|Collection change_id
     * @property Show\Field|Collection percent
     * @property Show\Field|Collection src
     * @property Show\Field|Collection notice
     * @property Show\Field|Collection has_admin
     * @property Show\Field|Collection demo_url
     * @property Show\Field|Collection hooks
     * @property Show\Field|Collection author_url
     * @property Show\Field|Collection config
     * @property Show\Field|Collection post_count
     * @property Show\Field|Collection delete_time
     * @property Show\Field|Collection seo_title
     * @property Show\Field|Collection seo_keywords
     * @property Show\Field|Collection seo_description
     * @property Show\Field|Collection list_tpl
     * @property Show\Field|Collection one_tpl
     * @property Show\Field|Collection post_id
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection post_type
     * @property Show\Field|Collection post_format
     * @property Show\Field|Collection post_status
     * @property Show\Field|Collection comment_status
     * @property Show\Field|Collection is_top
     * @property Show\Field|Collection recommended
     * @property Show\Field|Collection post_hits
     * @property Show\Field|Collection post_favorites
     * @property Show\Field|Collection post_like
     * @property Show\Field|Collection comment_count
     * @property Show\Field|Collection published_time
     * @property Show\Field|Collection post_title
     * @property Show\Field|Collection post_keywords
     * @property Show\Field|Collection post_excerpt
     * @property Show\Field|Collection post_source
     * @property Show\Field|Collection thumbnail
     * @property Show\Field|Collection post_content
     * @property Show\Field|Collection post_content_filtered
     * @property Show\Field|Collection tag_id
     * @property Show\Field|Collection object_id
     * @property Show\Field|Collection table_name
     * @property Show\Field|Collection type_grant
     * @property Show\Field|Collection effecttime
     * @property Show\Field|Collection coin_rob
     * @property Show\Field|Collection nums_rob
     * @property Show\Field|Collection redid
     * @property Show\Field|Collection push_frequency
     * @property Show\Field|Collection full_url
     * @property Show\Field|Collection slide_id
     * @property Show\Field|Collection push_key
     * @property Show\Field|Collection play_key
     * @property Show\Field|Collection play_time
     * @property Show\Field|Collection push
     * @property Show\Field|Collection play_key_switch
     * @property Show\Field|Collection is_compiled
     * @property Show\Field|Collection theme
     * @property Show\Field|Collection lang
     * @property Show\Field|Collection keywords
     * @property Show\Field|Collection is_public
     * @property Show\Field|Collection file
     * @property Show\Field|Collection config_more
     * @property Show\Field|Collection draft_more
     * @property Show\Field|Collection iswin
     * @property Show\Field|Collection logid
     * @property Show\Field|Collection user_type
     * @property Show\Field|Collection birthday
     * @property Show\Field|Collection freeze_money
     * @property Show\Field|Collection user_status
     * @property Show\Field|Collection user_pass
     * @property Show\Field|Collection user_nicename
     * @property Show\Field|Collection back_img
     * @property Show\Field|Collection avatar_thumb
     * @property Show\Field|Collection signature
     * @property Show\Field|Collection votestotal
     * @property Show\Field|Collection iszombie
     * @property Show\Field|Collection isrecord
     * @property Show\Field|Collection iszombiep
     * @property Show\Field|Collection issuper
     * @property Show\Field|Collection source
     * @property Show\Field|Collection end_bantime
     * @property Show\Field|Collection count_money
     * @property Show\Field|Collection count_Withdrawal
     * @property Show\Field|Collection google_token
     * @property Show\Field|Collection invite_code
     * @property Show\Field|Collection invite_level
     * @property Show\Field|Collection invite_key
     * @property Show\Field|Collection is_dai
     * @property Show\Field|Collection viewing_num
     * @property Show\Field|Collection is_share
     * @property Show\Field|Collection v_up_time
     * @property Show\Field|Collection bat
     * @property Show\Field|Collection qq
     * @property Show\Field|Collection wechat
     * @property Show\Field|Collection live_state
     * @property Show\Field|Collection real_name
     * @property Show\Field|Collection cer_no
     * @property Show\Field|Collection front_view
     * @property Show\Field|Collection back_view
     * @property Show\Field|Collection handset_view
     * @property Show\Field|Collection orderid
     * @property Show\Field|Collection u_id
     * @property Show\Field|Collection bank_logo
     * @property Show\Field|Collection bank_id
     * @property Show\Field|Collection bank_card
     * @property Show\Field|Collection last_card
     * @property Show\Field|Collection outlets
     * @property Show\Field|Collection region
     * @property Show\Field|Collection updatedtime
     * @property Show\Field|Collection ban_reason
     * @property Show\Field|Collection ban_long
     * @property Show\Field|Collection change_type
     * @property Show\Field|Collection next_money
     * @property Show\Field|Collection change_money
     * @property Show\Field|Collection service_charge
     * @property Show\Field|Collection withdraw_type
     * @property Show\Field|Collection withdraw_id
     * @property Show\Field|Collection ded_status
     * @property Show\Field|Collection contact_id
     * @property Show\Field|Collection num
     * @property Show\Field|Collection audit_time
     * @property Show\Field|Collection examine_time
     * @property Show\Field|Collection giftcount
     * @property Show\Field|Collection totalcoin
     * @property Show\Field|Collection schedule
     * @property Show\Field|Collection reward
     * @property Show\Field|Collection goodsid
     * @property Show\Field|Collection goodsuid
     * @property Show\Field|Collection time_format
     * @property Show\Field|Collection money_passwd
     * @property Show\Field|Collection wxpay_img
     * @property Show\Field|Collection wxpay_account
     * @property Show\Field|Collection pushid
     * @property Show\Field|Collection bonus_day
     * @property Show\Field|Collection bonus_time
     * @property Show\Field|Collection count_day
     * @property Show\Field|Collection expire_time
     * @property Show\Field|Collection device_type
     * @property Show\Field|Collection fromid
     * @property Show\Field|Collection count
     * @property Show\Field|Collection send_time
     * @property Show\Field|Collection thumb_s
     * @property Show\Field|Collection href_w
     * @property Show\Field|Collection steps
     * @property Show\Field|Collection shares
     * @property Show\Field|Collection nopass_time
     * @property Show\Field|Collection watch_ok
     * @property Show\Field|Collection is_ad
     * @property Show\Field|Collection ad_endtime
     * @property Show\Field|Collection ad_url
     * @property Show\Field|Collection classid
     * @property Show\Field|Collection videoid
     * @property Show\Field|Collection unchecked
     * @property Show\Field|Collection checked
     * @property Show\Field|Collection at_info
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection game_class_id(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection is_recommend(string $label = null)
     * @method Show\Field|Collection image(string $label = null)
     * @method Show\Field|Collection attempts(string $label = null)
     * @method Show\Field|Collection reserved_at(string $label = null)
     * @method Show\Field|Collection available_at(string $label = null)
     * @method Show\Field|Collection is_video(string $label = null)
     * @method Show\Field|Collection stream(string $label = null)
     * @method Show\Field|Collection pull(string $label = null)
     * @method Show\Field|Collection type_val(string $label = null)
     * @method Show\Field|Collection is_hot(string $label = null)
     * @method Show\Field|Collection dev(string $label = null)
     * @method Show\Field|Collection lottery_id(string $label = null)
     * @method Show\Field|Collection time(string $label = null)
     * @method Show\Field|Collection Issue(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection expect_time(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection money(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection bonus(string $label = null)
     * @method Show\Field|Collection rule_code(string $label = null)
     * @method Show\Field|Collection rule_name(string $label = null)
     * @method Show\Field|Collection rate(string $label = null)
     * @method Show\Field|Collection issue(string $label = null)
     * @method Show\Field|Collection lottery_time(string $label = null)
     * @method Show\Field|Collection rate_code(string $label = null)
     * @method Show\Field|Collection lottery_rule_group_id(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection deposit(string $label = null)
     * @method Show\Field|Collection withdrawal(string $label = null)
     * @method Show\Field|Collection bottom_pour(string $label = null)
     * @method Show\Field|Collection rebates(string $label = null)
     * @method Show\Field|Collection activity(string $label = null)
     * @method Show\Field|Collection addtime(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection last_login_time(string $label = null)
     * @method Show\Field|Collection coin(string $label = null)
     * @method Show\Field|Collection freeze_balance(string $label = null)
     * @method Show\Field|Collection balance(string $label = null)
     * @method Show\Field|Collection last_login_ip(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection total_money(string $label = null)
     * @method Show\Field|Collection withdrawal_amount(string $label = null)
     * @method Show\Field|Collection location(string $label = null)
     * @method Show\Field|Collection nicename(string $label = null)
     * @method Show\Field|Collection consumption(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection login_type(string $label = null)
     * @method Show\Field|Collection before_money(string $label = null)
     * @method Show\Field|Collection after_money(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection href(string $label = null)
     * @method Show\Field|Collection likes(string $label = null)
     * @method Show\Field|Collection views(string $label = null)
     * @method Show\Field|Collection comments(string $label = null)
     * @method Show\Field|Collection image_s(string $label = null)
     * @method Show\Field|Collection cate(string $label = null)
     * @method Show\Field|Collection img(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection start(string $label = null)
     * @method Show\Field|Collection end(string $label = null)
     * @method Show\Field|Collection adminid(string $label = null)
     * @method Show\Field|Collection admin(string $label = null)
     * @method Show\Field|Collection action(string $label = null)
     * @method Show\Field|Collection plat(string $label = null)
     * @method Show\Field|Collection list_order(string $label = null)
     * @method Show\Field|Collection app(string $label = null)
     * @method Show\Field|Collection controller(string $label = null)
     * @method Show\Field|Collection param(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection one_uid(string $label = null)
     * @method Show\Field|Collection one_profit(string $label = null)
     * @method Show\Field|Collection total(string $label = null)
     * @method Show\Field|Collection file_size(string $label = null)
     * @method Show\Field|Collection create_time(string $label = null)
     * @method Show\Field|Collection download_times(string $label = null)
     * @method Show\Field|Collection file_key(string $label = null)
     * @method Show\Field|Collection filename(string $label = null)
     * @method Show\Field|Collection file_path(string $label = null)
     * @method Show\Field|Collection file_md5(string $label = null)
     * @method Show\Field|Collection file_sha1(string $label = null)
     * @method Show\Field|Collection suffix(string $label = null)
     * @method Show\Field|Collection more(string $label = null)
     * @method Show\Field|Collection condition(string $label = null)
     * @method Show\Field|Collection giftid(string $label = null)
     * @method Show\Field|Collection nums(string $label = null)
     * @method Show\Field|Collection touid(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection bank_code(string $label = null)
     * @method Show\Field|Collection thumb(string $label = null)
     * @method Show\Field|Collection swf(string $label = null)
     * @method Show\Field|Collection swftime(string $label = null)
     * @method Show\Field|Collection needcoin(string $label = null)
     * @method Show\Field|Collection score(string $label = null)
     * @method Show\Field|Collection words(string $label = null)
     * @method Show\Field|Collection uptime(string $label = null)
     * @method Show\Field|Collection carid(string $label = null)
     * @method Show\Field|Collection endtime(string $label = null)
     * @method Show\Field|Collection account_bank(string $label = null)
     * @method Show\Field|Collection account(string $label = null)
     * @method Show\Field|Collection votes(string $label = null)
     * @method Show\Field|Collection orderno(string $label = null)
     * @method Show\Field|Collection trade_no(string $label = null)
     * @method Show\Field|Collection channel_name(string $label = null)
     * @method Show\Field|Collection pay_type(string $label = null)
     * @method Show\Field|Collection is_range(string $label = null)
     * @method Show\Field|Collection min_money(string $label = null)
     * @method Show\Field|Collection max_money(string $label = null)
     * @method Show\Field|Collection is_quick(string $label = null)
     * @method Show\Field|Collection quick_money(string $label = null)
     * @method Show\Field|Collection updatetime(string $label = null)
     * @method Show\Field|Collection shop_id(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection notify_url(string $label = null)
     * @method Show\Field|Collection return_url(string $label = null)
     * @method Show\Field|Collection function(string $label = null)
     * @method Show\Field|Collection del_status(string $label = null)
     * @method Show\Field|Collection bank_no(string $label = null)
     * @method Show\Field|Collection start_time(string $label = null)
     * @method Show\Field|Collection end_time(string $label = null)
     * @method Show\Field|Collection jump_type(string $label = null)
     * @method Show\Field|Collection user_channel_id(string $label = null)
     * @method Show\Field|Collection channel_id(string $label = null)
     * @method Show\Field|Collection remarks(string $label = null)
     * @method Show\Field|Collection coin_ios(string $label = null)
     * @method Show\Field|Collection product_id(string $label = null)
     * @method Show\Field|Collection give(string $label = null)
     * @method Show\Field|Collection coin_give(string $label = null)
     * @method Show\Field|Collection ambient(string $label = null)
     * @method Show\Field|Collection update_time(string $label = null)
     * @method Show\Field|Collection video_thumb(string $label = null)
     * @method Show\Field|Collection voice(string $label = null)
     * @method Show\Field|Collection length(string $label = null)
     * @method Show\Field|Collection isdel(string $label = null)
     * @method Show\Field|Collection xiajia_reason(string $label = null)
     * @method Show\Field|Collection lat(string $label = null)
     * @method Show\Field|Collection lng(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection fail_reason(string $label = null)
     * @method Show\Field|Collection show_val(string $label = null)
     * @method Show\Field|Collection recommend_val(string $label = null)
     * @method Show\Field|Collection labelid(string $label = null)
     * @method Show\Field|Collection dynamicid(string $label = null)
     * @method Show\Field|Collection commentid(string $label = null)
     * @method Show\Field|Collection parentid(string $label = null)
     * @method Show\Field|Collection isrecommend(string $label = null)
     * @method Show\Field|Collection use_nums(string $label = null)
     * @method Show\Field|Collection dynamic_type(string $label = null)
     * @method Show\Field|Collection badge(string $label = null)
     * @method Show\Field|Collection apply_pos(string $label = null)
     * @method Show\Field|Collection apply_side(string $label = null)
     * @method Show\Field|Collection briefing(string $label = null)
     * @method Show\Field|Collection carded(string $label = null)
     * @method Show\Field|Collection fullname(string $label = null)
     * @method Show\Field|Collection state(string $label = null)
     * @method Show\Field|Collection reason(string $label = null)
     * @method Show\Field|Collection disable(string $label = null)
     * @method Show\Field|Collection platform_extraction(string $label = null)
     * @method Show\Field|Collection divide_family(string $label = null)
     * @method Show\Field|Collection istip(string $label = null)
     * @method Show\Field|Collection familyid(string $label = null)
     * @method Show\Field|Collection profit_anthor(string $label = null)
     * @method Show\Field|Collection profit(string $label = null)
     * @method Show\Field|Collection signout(string $label = null)
     * @method Show\Field|Collection signout_reason(string $label = null)
     * @method Show\Field|Collection signout_istip(string $label = null)
     * @method Show\Field|Collection divide(string $label = null)
     * @method Show\Field|Collection liveuid(string $label = null)
     * @method Show\Field|Collection bankerid(string $label = null)
     * @method Show\Field|Collection starttime(string $label = null)
     * @method Show\Field|Collection result(string $label = null)
     * @method Show\Field|Collection banker_profit(string $label = null)
     * @method Show\Field|Collection banker_card(string $label = null)
     * @method Show\Field|Collection isintervene(string $label = null)
     * @method Show\Field|Collection ok(string $label = null)
     * @method Show\Field|Collection js(string $label = null)
     * @method Show\Field|Collection stop_time(string $label = null)
     * @method Show\Field|Collection 3fc_id(string $label = null)
     * @method Show\Field|Collection odds(string $label = null)
     * @method Show\Field|Collection is_ok(string $label = null)
     * @method Show\Field|Collection is_js(string $label = null)
     * @method Show\Field|Collection cat_id(string $label = null)
     * @method Show\Field|Collection show_name(string $label = null)
     * @method Show\Field|Collection short_name(string $label = null)
     * @method Show\Field|Collection type_name(string $label = null)
     * @method Show\Field|Collection hot(string $label = null)
     * @method Show\Field|Collection edittime(string $label = null)
     * @method Show\Field|Collection platform(string $label = null)
     * @method Show\Field|Collection rec_id(string $label = null)
     * @method Show\Field|Collection platform_code(string $label = null)
     * @method Show\Field|Collection game_name(string $label = null)
     * @method Show\Field|Collection game_type(string $label = null)
     * @method Show\Field|Collection user_login(string $label = null)
     * @method Show\Field|Collection bet_id(string $label = null)
     * @method Show\Field|Collection bet_time(string $label = null)
     * @method Show\Field|Collection bet_amount(string $label = null)
     * @method Show\Field|Collection pay_off(string $label = null)
     * @method Show\Field|Collection rate_status(string $label = null)
     * @method Show\Field|Collection cai_id(string $label = null)
     * @method Show\Field|Collection rate_name(string $label = null)
     * @method Show\Field|Collection order_id(string $label = null)
     * @method Show\Field|Collection cz_id(string $label = null)
     * @method Show\Field|Collection codes(string $label = null)
     * @method Show\Field|Collection prize_codes(string $label = null)
     * @method Show\Field|Collection expect(string $label = null)
     * @method Show\Field|Collection prize(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection gameid(string $label = null)
     * @method Show\Field|Collection coin_1(string $label = null)
     * @method Show\Field|Collection coin_2(string $label = null)
     * @method Show\Field|Collection coin_3(string $label = null)
     * @method Show\Field|Collection coin_4(string $label = null)
     * @method Show\Field|Collection coin_5(string $label = null)
     * @method Show\Field|Collection coin_6(string $label = null)
     * @method Show\Field|Collection times(string $label = null)
     * @method Show\Field|Collection mark(string $label = null)
     * @method Show\Field|Collection sid(string $label = null)
     * @method Show\Field|Collection giftname(string $label = null)
     * @method Show\Field|Collection gifticon(string $label = null)
     * @method Show\Field|Collection swftype(string $label = null)
     * @method Show\Field|Collection isplatgift(string $label = null)
     * @method Show\Field|Collection sticker_id(string $label = null)
     * @method Show\Field|Collection toy(string $label = null)
     * @method Show\Field|Collection isall(string $label = null)
     * @method Show\Field|Collection sortname(string $label = null)
     * @method Show\Field|Collection length_type(string $label = null)
     * @method Show\Field|Collection length_time(string $label = null)
     * @method Show\Field|Collection once(string $label = null)
     * @method Show\Field|Collection hook(string $label = null)
     * @method Show\Field|Collection plugin(string $label = null)
     * @method Show\Field|Collection levelid(string $label = null)
     * @method Show\Field|Collection level_up(string $label = null)
     * @method Show\Field|Collection rate_jackpot(string $label = null)
     * @method Show\Field|Collection reserved(string $label = null)
     * @method Show\Field|Collection colour(string $label = null)
     * @method Show\Field|Collection colour2(string $label = null)
     * @method Show\Field|Collection label(string $label = null)
     * @method Show\Field|Collection levelname(string $label = null)
     * @method Show\Field|Collection thumb_mark(string $label = null)
     * @method Show\Field|Collection bg(string $label = null)
     * @method Show\Field|Collection buytime(string $label = null)
     * @method Show\Field|Collection rating(string $label = null)
     * @method Show\Field|Collection target(string $label = null)
     * @method Show\Field|Collection rel(string $label = null)
     * @method Show\Field|Collection showid(string $label = null)
     * @method Show\Field|Collection islive(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection isvideo(string $label = null)
     * @method Show\Field|Collection wy_cid(string $label = null)
     * @method Show\Field|Collection goodnum(string $label = null)
     * @method Show\Field|Collection anyway(string $label = null)
     * @method Show\Field|Collection liveclassid(string $label = null)
     * @method Show\Field|Collection hotvotes(string $label = null)
     * @method Show\Field|Collection pkuid(string $label = null)
     * @method Show\Field|Collection pkstream(string $label = null)
     * @method Show\Field|Collection ismic(string $label = null)
     * @method Show\Field|Collection ishot(string $label = null)
     * @method Show\Field|Collection deviceinfo(string $label = null)
     * @method Show\Field|Collection language(string $label = null)
     * @method Show\Field|Collection game_action(string $label = null)
     * @method Show\Field|Collection banker_coin(string $label = null)
     * @method Show\Field|Collection isoff(string $label = null)
     * @method Show\Field|Collection offtime(string $label = null)
     * @method Show\Field|Collection recommend_time(string $label = null)
     * @method Show\Field|Collection c_id(string $label = null)
     * @method Show\Field|Collection c_type(string $label = null)
     * @method Show\Field|Collection isshop(string $label = null)
     * @method Show\Field|Collection reward_amount(string $label = null)
     * @method Show\Field|Collection superid(string $label = null)
     * @method Show\Field|Collection des(string $label = null)
     * @method Show\Field|Collection actionid(string $label = null)
     * @method Show\Field|Collection video_url(string $label = null)
     * @method Show\Field|Collection day(string $label = null)
     * @method Show\Field|Collection userid(string $label = null)
     * @method Show\Field|Collection to_userid(string $label = null)
     * @method Show\Field|Collection author(string $label = null)
     * @method Show\Field|Collection uploader(string $label = null)
     * @method Show\Field|Collection upload_type(string $label = null)
     * @method Show\Field|Collection img_url(string $label = null)
     * @method Show\Field|Collection file_url(string $label = null)
     * @method Show\Field|Collection classify_id(string $label = null)
     * @method Show\Field|Collection music_id(string $label = null)
     * @method Show\Field|Collection autoload(string $label = null)
     * @method Show\Field|Collection option_name(string $label = null)
     * @method Show\Field|Collection option_value(string $label = null)
     * @method Show\Field|Collection order_sn(string $label = null)
     * @method Show\Field|Collection third_order_sn(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection pay_status(string $label = null)
     * @method Show\Field|Collection payway(string $label = null)
     * @method Show\Field|Collection order_money(string $label = null)
     * @method Show\Field|Collection pay_money(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection postscript(string $label = null)
     * @method Show\Field|Collection charge_num(string $label = null)
     * @method Show\Field|Collection action_user(string $label = null)
     * @method Show\Field|Collection change_id(string $label = null)
     * @method Show\Field|Collection percent(string $label = null)
     * @method Show\Field|Collection src(string $label = null)
     * @method Show\Field|Collection notice(string $label = null)
     * @method Show\Field|Collection has_admin(string $label = null)
     * @method Show\Field|Collection demo_url(string $label = null)
     * @method Show\Field|Collection hooks(string $label = null)
     * @method Show\Field|Collection author_url(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection post_count(string $label = null)
     * @method Show\Field|Collection delete_time(string $label = null)
     * @method Show\Field|Collection seo_title(string $label = null)
     * @method Show\Field|Collection seo_keywords(string $label = null)
     * @method Show\Field|Collection seo_description(string $label = null)
     * @method Show\Field|Collection list_tpl(string $label = null)
     * @method Show\Field|Collection one_tpl(string $label = null)
     * @method Show\Field|Collection post_id(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection post_type(string $label = null)
     * @method Show\Field|Collection post_format(string $label = null)
     * @method Show\Field|Collection post_status(string $label = null)
     * @method Show\Field|Collection comment_status(string $label = null)
     * @method Show\Field|Collection is_top(string $label = null)
     * @method Show\Field|Collection recommended(string $label = null)
     * @method Show\Field|Collection post_hits(string $label = null)
     * @method Show\Field|Collection post_favorites(string $label = null)
     * @method Show\Field|Collection post_like(string $label = null)
     * @method Show\Field|Collection comment_count(string $label = null)
     * @method Show\Field|Collection published_time(string $label = null)
     * @method Show\Field|Collection post_title(string $label = null)
     * @method Show\Field|Collection post_keywords(string $label = null)
     * @method Show\Field|Collection post_excerpt(string $label = null)
     * @method Show\Field|Collection post_source(string $label = null)
     * @method Show\Field|Collection thumbnail(string $label = null)
     * @method Show\Field|Collection post_content(string $label = null)
     * @method Show\Field|Collection post_content_filtered(string $label = null)
     * @method Show\Field|Collection tag_id(string $label = null)
     * @method Show\Field|Collection object_id(string $label = null)
     * @method Show\Field|Collection table_name(string $label = null)
     * @method Show\Field|Collection type_grant(string $label = null)
     * @method Show\Field|Collection effecttime(string $label = null)
     * @method Show\Field|Collection coin_rob(string $label = null)
     * @method Show\Field|Collection nums_rob(string $label = null)
     * @method Show\Field|Collection redid(string $label = null)
     * @method Show\Field|Collection push_frequency(string $label = null)
     * @method Show\Field|Collection full_url(string $label = null)
     * @method Show\Field|Collection slide_id(string $label = null)
     * @method Show\Field|Collection push_key(string $label = null)
     * @method Show\Field|Collection play_key(string $label = null)
     * @method Show\Field|Collection play_time(string $label = null)
     * @method Show\Field|Collection push(string $label = null)
     * @method Show\Field|Collection play_key_switch(string $label = null)
     * @method Show\Field|Collection is_compiled(string $label = null)
     * @method Show\Field|Collection theme(string $label = null)
     * @method Show\Field|Collection lang(string $label = null)
     * @method Show\Field|Collection keywords(string $label = null)
     * @method Show\Field|Collection is_public(string $label = null)
     * @method Show\Field|Collection file(string $label = null)
     * @method Show\Field|Collection config_more(string $label = null)
     * @method Show\Field|Collection draft_more(string $label = null)
     * @method Show\Field|Collection iswin(string $label = null)
     * @method Show\Field|Collection logid(string $label = null)
     * @method Show\Field|Collection user_type(string $label = null)
     * @method Show\Field|Collection birthday(string $label = null)
     * @method Show\Field|Collection freeze_money(string $label = null)
     * @method Show\Field|Collection user_status(string $label = null)
     * @method Show\Field|Collection user_pass(string $label = null)
     * @method Show\Field|Collection user_nicename(string $label = null)
     * @method Show\Field|Collection back_img(string $label = null)
     * @method Show\Field|Collection avatar_thumb(string $label = null)
     * @method Show\Field|Collection signature(string $label = null)
     * @method Show\Field|Collection votestotal(string $label = null)
     * @method Show\Field|Collection iszombie(string $label = null)
     * @method Show\Field|Collection isrecord(string $label = null)
     * @method Show\Field|Collection iszombiep(string $label = null)
     * @method Show\Field|Collection issuper(string $label = null)
     * @method Show\Field|Collection source(string $label = null)
     * @method Show\Field|Collection end_bantime(string $label = null)
     * @method Show\Field|Collection count_money(string $label = null)
     * @method Show\Field|Collection count_Withdrawal(string $label = null)
     * @method Show\Field|Collection google_token(string $label = null)
     * @method Show\Field|Collection invite_code(string $label = null)
     * @method Show\Field|Collection invite_level(string $label = null)
     * @method Show\Field|Collection invite_key(string $label = null)
     * @method Show\Field|Collection is_dai(string $label = null)
     * @method Show\Field|Collection viewing_num(string $label = null)
     * @method Show\Field|Collection is_share(string $label = null)
     * @method Show\Field|Collection v_up_time(string $label = null)
     * @method Show\Field|Collection bat(string $label = null)
     * @method Show\Field|Collection qq(string $label = null)
     * @method Show\Field|Collection wechat(string $label = null)
     * @method Show\Field|Collection live_state(string $label = null)
     * @method Show\Field|Collection real_name(string $label = null)
     * @method Show\Field|Collection cer_no(string $label = null)
     * @method Show\Field|Collection front_view(string $label = null)
     * @method Show\Field|Collection back_view(string $label = null)
     * @method Show\Field|Collection handset_view(string $label = null)
     * @method Show\Field|Collection orderid(string $label = null)
     * @method Show\Field|Collection u_id(string $label = null)
     * @method Show\Field|Collection bank_logo(string $label = null)
     * @method Show\Field|Collection bank_id(string $label = null)
     * @method Show\Field|Collection bank_card(string $label = null)
     * @method Show\Field|Collection last_card(string $label = null)
     * @method Show\Field|Collection outlets(string $label = null)
     * @method Show\Field|Collection region(string $label = null)
     * @method Show\Field|Collection updatedtime(string $label = null)
     * @method Show\Field|Collection ban_reason(string $label = null)
     * @method Show\Field|Collection ban_long(string $label = null)
     * @method Show\Field|Collection change_type(string $label = null)
     * @method Show\Field|Collection next_money(string $label = null)
     * @method Show\Field|Collection change_money(string $label = null)
     * @method Show\Field|Collection service_charge(string $label = null)
     * @method Show\Field|Collection withdraw_type(string $label = null)
     * @method Show\Field|Collection withdraw_id(string $label = null)
     * @method Show\Field|Collection ded_status(string $label = null)
     * @method Show\Field|Collection contact_id(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection audit_time(string $label = null)
     * @method Show\Field|Collection examine_time(string $label = null)
     * @method Show\Field|Collection giftcount(string $label = null)
     * @method Show\Field|Collection totalcoin(string $label = null)
     * @method Show\Field|Collection schedule(string $label = null)
     * @method Show\Field|Collection reward(string $label = null)
     * @method Show\Field|Collection goodsid(string $label = null)
     * @method Show\Field|Collection goodsuid(string $label = null)
     * @method Show\Field|Collection time_format(string $label = null)
     * @method Show\Field|Collection money_passwd(string $label = null)
     * @method Show\Field|Collection wxpay_img(string $label = null)
     * @method Show\Field|Collection wxpay_account(string $label = null)
     * @method Show\Field|Collection pushid(string $label = null)
     * @method Show\Field|Collection bonus_day(string $label = null)
     * @method Show\Field|Collection bonus_time(string $label = null)
     * @method Show\Field|Collection count_day(string $label = null)
     * @method Show\Field|Collection expire_time(string $label = null)
     * @method Show\Field|Collection device_type(string $label = null)
     * @method Show\Field|Collection fromid(string $label = null)
     * @method Show\Field|Collection count(string $label = null)
     * @method Show\Field|Collection send_time(string $label = null)
     * @method Show\Field|Collection thumb_s(string $label = null)
     * @method Show\Field|Collection href_w(string $label = null)
     * @method Show\Field|Collection steps(string $label = null)
     * @method Show\Field|Collection shares(string $label = null)
     * @method Show\Field|Collection nopass_time(string $label = null)
     * @method Show\Field|Collection watch_ok(string $label = null)
     * @method Show\Field|Collection is_ad(string $label = null)
     * @method Show\Field|Collection ad_endtime(string $label = null)
     * @method Show\Field|Collection ad_url(string $label = null)
     * @method Show\Field|Collection classid(string $label = null)
     * @method Show\Field|Collection videoid(string $label = null)
     * @method Show\Field|Collection unchecked(string $label = null)
     * @method Show\Field|Collection checked(string $label = null)
     * @method Show\Field|Collection at_info(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
