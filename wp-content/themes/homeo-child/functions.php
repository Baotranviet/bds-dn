<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 9999);

function child_theme_enqueue_styles() {
    $parenthandle = 'homeo-style';
    $theme = wp_get_theme();
    // wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
    //     array(),
    //     $theme->parent()->get('Version')
    // );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}

add_filter('gettext', function($translated_text, $text, $domain ){
    if ($domain == 'homeo') {
        switch ($text) {
            case 'Filter & Map':
                $translated_text = 'Bộ lọc & Map';
                break;
            case 'Show Filter':
                $translated_text = 'Bộ lọc & Map';
                break;
            case 'Map View':
                $translated_text = 'Chế độ xem bản đồ';
                break;
            case 'Properties View':
                $translated_text = 'Chế độ xem BĐS';
                break;
            case 'Home':
                $translated_text = 'Trang chủ';
                break;
            case 'Save Search':
                $translated_text = 'Lưu tìm kiếm';
                break;
            case 'Title':
                $translated_text = 'Tiêu đề';
                break;
            case 'Email Frequency':
                $translated_text = 'Tần suất Email';
                break;
            case 'Save':
                $translated_text = 'Lưu';
                break;
            case 'Featured':
                $translated_text = 'Nổi bật';
                break;
            case 'Beds:':
                $translated_text = 'Giường:';
                break;
            case 'Baths:':
                $translated_text = 'Phòng tắm:';
                break;
            case 'Name':
                $translated_text = 'Tên';
                break;
            case 'Phone':
                $translated_text = 'Số điện thoại';
                break;
            case 'Message':
                $translated_text = 'Tin nhắn';
                break;
            case 'Send Message':
                $translated_text = 'Gửi tin nhắn';
                break;
            case 'Subject':
                $translated_text = 'Tiêu đề';
                break;
            case 'Enter text here...':
                $translated_text = 'Nhập văn bản ở đây...';
                break;
            case 'Overview':
                $translated_text = 'Tổng quan';
                break;
            case 'Reviews':
                $translated_text = 'Đánh giá';
                break;
            case 'Details':
                $translated_text = 'Chi tiết';
                break;
            case 'Amenities':
                $translated_text = 'Tiện nghi';
                break;
            case 'Materials':
                $translated_text = 'Vật liệu';
                break;
            case 'Floor Plans':
                $translated_text = 'Sơ đồ tầng';
                break;
            case 'Facilities':
                $translated_text = 'Vị trí BĐS';
                break;
            case 'Size:':
                $translated_text = 'Diện tích : ';
                break;
            case 'Valuation':
                $translated_text = 'Đánh giá';
                break;
            case 'Rating':
                $translated_text = 'Xếp hạng';
                break;
            case 'Write Comment':
                $translated_text = 'Viết bình luận';
                break;
            case 'Be the first to review &ldquo;%s&rdquo;':
                $translated_text = 'Hãy là người đầu tiên nhận xét &ldquo;%s&rdquo;';
                break;
            case 'Submit Review':
                $translated_text = 'Gửi đánh giá';
                break;
            case 'Add a review':
                $translated_text = 'Thêm đánh giá';
                break;
            case '0 Comments':
                $translated_text = '0 Bình luận';
                break;
            case '1 Comment':
                $translated_text = '1 Bình luận';
                break;
            case '% Comments':
                $translated_text = '% Bình luận';
                break;
            case '%d Review':
                $translated_text = '% Đánh giá';
                break;
            case '(%d Review)':
                $translated_text = '(%d Đánh giá)';
                break;
            case 'Lot Area:':
                $translated_text = 'Diện tích lô đất:';
                break;
            case 'Home Area:':
                $translated_text = 'Diện tích BĐS:';
                break;
            case 'Rooms:':
                $translated_text = 'Phòng:';
                break;
            case 'Garages:':
                $translated_text = 'Gara:';
                break;
            case 'Year built:':
                $translated_text = 'Năm xây dựng:';
                break;
            case 'Price:':
                $translated_text = 'Giá:';
                break;
            case 'Property Status:':
                $translated_text = 'Tình Trạng BĐS:';
                break;
            case 'Write your message...':
                $translated_text = 'Viết tin nhắn của bạn ...';
                break;
            case 'From':
                $translated_text = 'Từ';
                break;
            case 'to':
                $translated_text = 'đến';
                break;
            case 'Related Properties':
                $translated_text = 'BĐS khác';
                break;
            case 'Subproperties':
                $translated_text = 'BĐS liên quan';
                break;
            case 'Properties':
                $translated_text = 'Bất động sản';
                break;
            case '%s ago':
                $translated_text = '%s trước';
                break;
            case 'Showing all %d results':
                $translated_text = 'Hiển thị tất cả %d kết quả';
                break;
            case 'No agency found.':
                $translated_text = 'Không tìm thấy môi giới.';
                break;
            case 'Agents':
                $translated_text = 'Người môi giới';
                break;
            case 'Location':
                $translated_text = 'Vị trí';
                break;
            case 'Phone:':
                $translated_text = 'Sđt :';
                break;
            case 'No properties found':
                $translated_text = 'Không tìm thấy bất động sản';
                break;
            case '%d Reviews':
                $translated_text = '%d Đánh giá';
                break;
            case 'View More':
                $translated_text = 'Xem thêm';
                break;
            case 'View My Listings':
                $translated_text = 'Xem thêm';
                break;
            case 'show':
                $translated_text = 'hiện';
                break;
            case '%s : Any':
                $translated_text = '%s : Bất kỳ';
                break;
            case 'Search results for "%s"':
                $translated_text = 'Kết quả tìm kiếm cho "%s"';
                break;
            case 'Posts tagged "%s"':
                $translated_text = 'Các tin tức gắn thẻ "%s"';
                break;
            case 'Search':
                $translated_text = 'Tìm kiếm';
                break;
            case 'Nothing Found':
                $translated_text = 'Không tìm thấy';
                break;
            case 'Try again please, use the search form below.':
                $translated_text = 'Vui lòng thử lại, sử dụng biểu mẫu tìm kiếm bên dưới.';
                break;
            case 'Read More':
                $translated_text = 'Đọc thêm';
                break;
            case 'Blog':
                $translated_text = 'Tin tức';
                break;
            case 'Share Link':
                $translated_text = 'Chia sẻ';
                break;
            case 'Tags: ':
                $translated_text = 'Thẻ: ';
                break;
            case 'Prev':
                $translated_text = 'Tin Trước';
                break;
            case 'Next':
                $translated_text = 'Tin kế tiếp';
                break;
            case 'Leave a Comment':
                $translated_text = 'Để lại một bình luận';
                break;
            case 'Write Your Comment':
                $translated_text = 'Viết bình luận của bạn';
                break;
            case 'Submit Comment':
                $translated_text = 'Gửi bình luận';
                break;
            case 'Related Posts':
                $translated_text = 'Tin tức liên quan';
                break;
            case 'Login':
                $translated_text = 'Đăng nhập';
                break;
            case 'Register':
                $translated_text = 'Đăng ký';
                break;
            case 'Enter username or email':
                $translated_text = 'Nhập username hoặc email';
                break;
            case 'Enter Password':
                $translated_text = 'Nhập mật khẩu';
                break;
            case 'Keep me signed in':
                $translated_text = 'Nhớ tài khoản';
                break;
            case 'Lost Your Password?':
                $translated_text = 'Quên mật khẩu?';
                break;
            case 'Don\'t you have an account?':
                $translated_text = 'Bạn chưa có tài khoản?';
                break;
            case 'User Name':
                $translated_text = 'Họ và Tên';
                break;
            case 'Password':
                $translated_text = 'Mật khẩu';
                break;
            case 'Re-enter Password':
                $translated_text = 'Nhập lại mật khẩu';
                break;
            case 'Select Role':
                $translated_text = 'Chọn vai trò';
                break;
            case 'User':
                $translated_text = 'Người dùng';
                break;
            case 'Agent':
                $translated_text = 'Người môi giới';
                break;
            case 'Agency':
                $translated_text = 'Công ty môi giới';
                break;
            case 'Sign Up':
                $translated_text = 'Đăng ký';
                break;
            case 'Agency':
                $translated_text = 'Công ty môi giới';
                break;
            case 'Already have an account?':
                $translated_text = 'Bạn đã tạo tài khoản rồi?';
                break;
            case 'Reset Password':
                $translated_text = 'Đặt lại mật khẩu';
                break;
            case 'Username or E-mail':
                $translated_text = 'Username hoặc Email';
                break;
            case 'Enter Username or E-mail':
                $translated_text = 'Nhập username hoặc email';
                break;
            case 'Get New Password':
                $translated_text = 'Lấy mật khẩu mới';
                break;
            case 'Cancel':
                $translated_text = 'Hủy';
                break;
            case 'Back To Login':
                $translated_text = 'Quay lại đăng nhập';
                break;
            case 'Hello ':
                $translated_text = 'Xin chào ';
                break;
            case 'Published':
                $translated_text = 'Được phát hành';
                break;
            case 'Pending':
                $translated_text = 'Chưa giải quyết';
                break;
            case 'Favorites':
                $translated_text = 'Yêu thích';
                break;
            case 'Recent Reviews':
                $translated_text = 'Những đánh giá gần đây';
                break;
            case 'No reviews found.':
                $translated_text = 'Không có đánh giá nào được tìm thấy.';
                break;
            case 'Messages':
                $translated_text = 'Tin nhắn';
                break;
            case 'Edit Profile':
                $translated_text = 'Chỉnh sửa hồ sơ';
                break;
            case 'Change Avatar':
                $translated_text = 'Thay đổi hình đại diện';
                break;
            case 'First name':
                $translated_text = 'Họ';
                break;
            case 'Last Name':
                $translated_text = 'Tên';
                break;
            case 'Address':
                $translated_text = 'Địa chỉ';
                break;
            case 'Biographical Info':
                $translated_text = 'Thông tin tiểu sử';
                break;
            case 'Update':
                $translated_text = 'Cập nhật';
                break;
            case 'Upload Image':
                $translated_text = 'Tải lên hình ảnh';
                break;
            case 'Profile has been successfully updated.':
                $translated_text = 'Hồ sơ đã được cập nhật thành công.';
                break;
            case 'Profile url':
                $translated_text = 'Url hồ sơ';
                break;
            case 'Edit':
                $translated_text = 'Sửa';
                break;
            case 'Featured Image':
                $translated_text = 'Hình ảnh nổi bật';
                break;
            case 'Upload File':
                $translated_text = 'Tải lên hình ảnh';
                break;
            case 'Full Name':
                $translated_text = 'Họ và tên';
                break;
            case 'Description':
                $translated_text = 'Miêu tả';
                break;
            case 'Job':
                $translated_text = 'Công việc';
                break;
            case 'E-mail':
                $translated_text = 'Email';
                break;
            case 'Phone':
                $translated_text = 'Số điện thoại';
                break;
            case 'Location':
                $translated_text = 'Vị trí';
                break;
            case 'Friendly Address':
                $translated_text = 'Địa chỉ';
                break;
            case 'Map Location':
                $translated_text = 'Vị trí bản đồ';
                break;
            case 'Latitude':
                $translated_text = 'Vĩ độ';
                break;
            case 'Longitude':
                $translated_text = 'Kinh độ';
                break;
            case 'Socials':
                $translated_text = 'Mạng xã hội';
                break;
            case 'Add Another Network':
                $translated_text = 'Thêm Network';
                break;
            case 'Remove Network':
                $translated_text = 'Xóa Network';
                break;
            case 'Save Profile':
                $translated_text = 'Lưu hồ sơ';
                break;
            case 'All Reviews':
                $translated_text = 'Tất cả đánh giá';
                break;
            case 'No message found':
                $translated_text = 'Không tìm thấy tin nhắn';
                break;
            case 'My Properties':
                $translated_text = 'Bất động sản của tôi';
                break;
            case 'Image':
                $translated_text = 'Hình ảnh';
                break;
            case 'Information':
                $translated_text = 'Thông tin';
                break;
            case 'Expiry':
                $translated_text = 'Hết hạn';
                break;
            case 'Status':
                $translated_text = 'Trạng thái';
                break;
            case 'View':
                $translated_text = 'Lượt xem';
                break;
            case 'Action':
                $translated_text = 'Hành động';
                break;
            case 'Actions':
                $translated_text = 'Hành động';
                break;
            case 'You don\'t have any properties yet. Start by creating new one.':
                $translated_text = 'Bạn chưa có bất kỳ bất động sản nào. Bắt đầu bằng cách tạo một cái mới.';
                break;
            case 'Search ...':
                $translated_text = 'Tìm kiếm ...';
                break;
            case 'Default':
                $translated_text = 'Mặc định';
                break;
            case 'Newest':
                $translated_text = 'Mới nhất';
                break;
            case 'Oldest':
                $translated_text = 'Cũ nhất';
                break;
            case 'Sort by: ':
                $translated_text = 'Sắp xếp theo:';
                break;
            case 'Favorite':
                $translated_text = 'Yêu thích';
                break;
            case 'No properties found.':
                $translated_text = 'Không tim thấy BĐS nào.';
                break;
            case 'My Saved Search':
                $translated_text = 'Tìm kiếm đã Lưu của tôi';
                break;
            case 'Saved Search Query':
                $translated_text = 'Truy vấn tìm kiếm đã lưu';
                break;
            case 'Number Properties':
                $translated_text = 'Số BĐS';
                break;
            case 'Times':
                $translated_text = 'Thời gian';
                break;
            case 'No property alert found.':
                $translated_text = 'Không tìm thấy lưu trữ nào.';
                break;
            case 'Add New Property':
                $translated_text = 'Thêm mới Bất động sản';
                break;
            case 'No results found':
                $translated_text = 'Không tìm thấy kết quả';
                break;
            case 'Enter search e.g. Lincoln Park':
                $translated_text = 'Nhập vị trí';
                break;
            case 'Upload Files':
                $translated_text = 'Tải lên File';
                break;
            case 'Add Group':
                $translated_text = 'Thêm nhóm';
                break;
            case 'Remove Group':
                $translated_text = 'Xóa nhóm';
                break;
            case 'Group {#}':
                $translated_text = 'Nhóm {#}';
                break;
            case 'Key':
                $translated_text = 'Từ khóa';
                break;
            case 'Value':
                $translated_text = 'Giá trị';
                break;
            case 'Floor Group {#}':
                $translated_text = 'Tầng {#}';
                break;
            case 'Add Floor':
                $translated_text = 'Thêm tầng';
                break;
            case 'Remove Floor':
                $translated_text = 'Xóa tầng';
                break;
            case 'Save & Preview':
                $translated_text = 'Lưu & xem trước';
                break;
            case 'Change Password':
                $translated_text = 'Thay đổi mật khẩu';
                break;
            case 'Old password':
                $translated_text = 'Mật khẩu cũ';
                break;
            case 'New password':
                $translated_text = 'Mật khẩu mới';
                break;
            case 'Retype password':
                $translated_text = 'Xác nhận mật khẩu';
                break;
            case 'Search Contacts...':
                $translated_text = 'Tìm liên hệ...';
                break;
            case 'All':
                $translated_text = 'Tất cả';
                break;
            case 'Read':
                $translated_text = 'Đã đọc';
                break;
            case 'Unread':
                $translated_text = 'Chưa đọc';
                break;
            case 'Delete Conversation':
                $translated_text = 'Xóa cuộc trò chuyện';
                break;
            case 'No message found':
                $translated_text = 'Không tìm thấy tin nhắn';
                break;
            case 'Team Members':
                $translated_text = 'Thành viên';
                break;
            case 'All Members':
                $translated_text = 'Tất cả thành viên';
                break;
            case 'No agents found.':
                $translated_text = 'Không tìm thấy thành viên';
                break;
            case 'Add Member':
                $translated_text = 'Thêm thành viên';
                break;
            case 'Search..':
                $translated_text = 'Tìm kiếm..';
                break;
            case 'Add Agent':
                $translated_text = 'Thêm thành viên';
                break;
        }
    }
    else if($domain == 'wp-realestate') {
        switch ($text) {
            case 'Valuation':
                $translated_text = 'Đánh giá';
                break;
            case 'Showing all %d results':
                $translated_text = 'Hiển thị tất cả %d kết quả';
                break;
            case 'Showing <span class="first">%1$d</span> &ndash; <span class="last">%2$d</span> of %3$d results':
                $translated_text = 'Hiển thị <span class="first">%1$d</span> &ndash; <span class="last">%2$d</span> trong số %3$d kết quả';
                break;
            case 'Sort by:':
                $translated_text = 'Sắp xếp theo:';
                break;
            case 'Default':
                $translated_text = 'Mặc định';
                break;
            case 'Newest':
                $translated_text = 'Mới nhất';
                break;
            case 'Oldest':
                $translated_text = 'Cũ nhất';
                break;
            case 'Highest Price':
                $translated_text = 'Giá cao nhất';
                break;
            case 'Lowest Price':
                $translated_text = 'Giá thấp nhất';
                break;
            case 'Name':
                $translated_text = 'Tên';
                break;
            case 'Random':
                $translated_text = 'Ngẫu nhiên';
                break;
            case 'Title':
                $translated_text = 'Tiêu đề';
                break;
            case 'Email Frequency':
                $translated_text = 'Tần suất Email';
                break;
            case 'Save':
                $translated_text = 'Lưu';
                break;
            case 'Daily':
                $translated_text = 'Hằng ngày';
                break;
            case 'Fortnightly':
                $translated_text = 'Bốn tuần một lần';
                break;
            case 'Monthly':
                $translated_text = 'Hàng tháng';
                break;
            case 'Annually':
                $translated_text = 'Hàng năm';
                break;
            case 'Add Compare':
                $translated_text = 'So sánh';
                break;
            case 'Add Favorite':
                $translated_text = 'Yêu thích';
                break;
            case 'Beds : ':
                $translated_text = 'Giường : ';
                break;
            case 'Lot Area : ':
                $translated_text = 'Diện tích lô đất : ';
                break;
            case 'Property ID : ':
                $translated_text = 'ID BĐS : ';
                break;
            case 'Home Area : ':
                $translated_text = 'Diện tích BĐS : ';
                break;
            case 'Lot dimensions : ':
                $translated_text = 'Kích thước lô đất : ';
                break;
            case 'Facilities':
                $translated_text = 'Vị trí BĐS';
                break;
            case 'Materials':
                $translated_text = 'Vật liệu';
                break;
            case 'Size:':
                $translated_text = 'Diện tích : ';
                break;
            case 'Rooms : ':
                $translated_text = 'Phòng : ';
                break;
            case 'Baths : ':
                $translated_text = 'Phòng tắm : ';
                break;
            case 'Garages : ':
                $translated_text = 'Gara : ';
                break;
            case 'Price : ':
                $translated_text = 'Giá : ';
                break;
            case 'Year built : ':
                $translated_text = 'Năm xây dựng : ';
                break;
            case 'Rating':
                $translated_text = 'Xếp hạng';
                break;
            case '%d Review':
                $translated_text = '% Đánh giá';
                break;
            case '(%d Review)':
                $translated_text = '(%d Đánh giá)';
                break;
            case 'Your message has been successfully sent.':
                $translated_text = 'Tin nhắn của bạn đã được gửi thành công.';
                break;
            case 'An error occurred when sending an email':
                $translated_text = 'Đã xảy ra lỗi khi gửi email';
                break;
            case 'Form has been not filled correctly.':
                $translated_text = 'Biểu mẫu đã không được điền chính xác.';
                break;
            case 'Yes':
                $translated_text = 'Đúng';
                break;
            case 'No':
                $translated_text = 'Không';
                break;
            case 'From':
                $translated_text = 'Từ';
                break;
            case 'to':
                $translated_text = 'đến';
                break;
            case 'Properties':
                $translated_text = 'Bất động sản';
                break;
            case 'Write Agency Name':
                $translated_text = 'Tên Môi giới';
                break;
            case 'Write Agent Name':
                $translated_text = 'Tên Môi giới';
                break;
            case 'All Location':
                $translated_text = 'Tất cả vị trí';
                break;
            case 'No agency found.':
                $translated_text = 'Không tìm thấy môi giới.';
                break;
            case 'Contact %s':
                $translated_text = 'Liên hệ %s';
                break;
            case 'Name :':
                $translated_text = 'Tên :';
                break;
            case 'Phone :':
                $translated_text = 'Sđt :';
                break;
            case 'Position :':
                $translated_text = 'Vị trí :';
                break;
            case 'Agent Info':
                $translated_text = 'Thông tin môi giới';
                break;
            case 'No properties found':
                $translated_text = 'Không tìm thấy bất động sản';
                break;
            case 'Login':
                $translated_text = 'Đăng nhập';
                break;
            case 'Register':
                $translated_text = 'Đăng ký';
                break;
            case 'Enter username or email':
                $translated_text = 'Nhập username hoặc email';
                break;
            case 'Enter Password':
                $translated_text = 'Nhập mật khẩu';
                break;
            case 'Keep me signed in':
                $translated_text = 'Nhớ tài khoản';
                break;
            case 'Lost Your Password?':
                $translated_text = 'Quên mật khẩu?';
                break;
            case 'Don\'t you have an account?':
                $translated_text = 'Bạn chưa có tài khoản?';
                break;
            case 'User Name':
                $translated_text = 'Họ và Tên';
                break;
            case 'Password':
                $translated_text = 'Mật khẩu';
                break;
            case 'Re-enter Password':
                $translated_text = 'Nhập lại mật khẩu';
                break;
            case 'Select Role':
                $translated_text = 'Chọn vai trò';
                break;
            case 'User':
                $translated_text = 'Người dùng';
                break;
            case 'Agent':
                $translated_text = 'Người môi giới';
                break;
            case 'Agency':
                $translated_text = 'Công ty môi giới';
                break;
            case 'Sign Up':
                $translated_text = 'Đăng ký';
                break;
            case 'Agency':
                $translated_text = 'Công ty môi giới';
                break;
            case 'Already have an account?':
                $translated_text = 'Bạn đã tạo tài khoản rồi?';
                break;
            case 'Reset Password':
                $translated_text = 'Đặt lại mật khẩu';
                break;
            case 'Username or E-mail':
                $translated_text = 'Username hoặc Email';
                break;
            case 'Enter Username or E-mail':
                $translated_text = 'Nhập username hoặc email';
                break;
            case 'Get New Password':
                $translated_text = 'Lấy mật khẩu mới';
                break;
            case 'Cancel':
                $translated_text = 'Hủy';
                break;
            case 'Back To Login':
                $translated_text = 'Quay lại đăng nhập';
                break;
            case 'Wrong username or password. Please try again!!!':
                $translated_text = 'Username hoặc mật khẩu sai. Vui lòng thử lại!!!';
                break;
            case 'Signin successful, redirecting...':
                $translated_text = 'Đăng nhập thành công, đang chuyển hướng ...';
                break;
            case 'There is no user registered with that username.':
                $translated_text = 'Không có người dùng nào đăng ký với username này.';
                break;
            case 'There is no user registered with that email address.':
                $translated_text = 'Không có người dùng đăng ký với email đó.';
                break;
            case 'Invalid username or e-mail address.':
                $translated_text = 'Username hoặc email không hợp lệ.';
                break;
            case 'Enter an username or e-mail address.':
                $translated_text = 'Nhập username hoặc email.';
                break;
            case 'Please fill all form fields':
                $translated_text = 'Vui lòng điền vào tất cả các trường của biểu mẫu';
                break;
            case 'Check your email address for you new password.':
                $translated_text = 'Kiểm tra email của bạn để lấy mật khẩu mới.';
                break;
            case 'Required form field is missing':
                $translated_text = 'Trường biểu mẫu bắt buộc bị thiếu';
                break;
            case 'Username too short. At least 4 characters is required':
                $translated_text = 'Username quá ngắn. Cần ít nhất 4 ký tự';
                break;
            case 'Terms and Conditions are required':
                $translated_text = 'Điều khoản và Điều kiện là bắt buộc';
                break;
            case 'The username already exists!':
                $translated_text = 'Username này đã được sử dụng!';
                break;
            case 'The username you entered is not valid':
                $translated_text = 'Tên người dùng bạn đã nhập không hợp lệ';
                break;
            case 'Password length must be greater than 5':
                $translated_text = 'Độ dài mật khẩu phải lớn hơn 5';
                break;
            case 'Password must be equal Confirm Password':
                $translated_text = 'Mật khẩu phải bằng Xác nhận mật khẩu';
                break;
            case 'Email is not valid':
                $translated_text = 'Email không hợp lệ';
                break;
            case 'Email Already in use':
                $translated_text = 'Email đã được sử dụng';
                break;
            case 'You have registered, redirecting ...':
                $translated_text = 'Bạn đã đăng ký, đang chuyển hướng ...';
                break;
            case 'Edit Profile':
                $translated_text = 'Chỉnh sửa hồ sơ';
                break;
            case 'Change Avatar':
                $translated_text = 'Thay đổi hình đại diện';
                break;
            case 'First name':
                $translated_text = 'Họ';
                break;
            case 'Last Name':
                $translated_text = 'Tên';
                break;
            case 'Address':
                $translated_text = 'Địa chỉ';
                break;
            case 'Biographical Info':
                $translated_text = 'Thông tin tiểu sử';
                break;
            case 'Update':
                $translated_text = 'Cập nhật';
                break;
            case 'Profile has been successfully updated.':
                $translated_text = 'Hồ sơ đã được cập nhật thành công.';
                break;
            case 'Upload Image':
                $translated_text = 'Tải lên hình ảnh';
                break;
            case 'Profile url':
                $translated_text = 'Url hồ sơ';
                break;
            case 'Edit':
                $translated_text = 'Sửa';
                break;
            case 'Featured Image':
                $translated_text = 'Hình ảnh nổi bật';
                break;
            case 'Upload File':
                $translated_text = 'Tải lên hình ảnh';
                break;
            case 'Full Name':
                $translated_text = 'Họ và tên';
                break;
            case 'Description':
                $translated_text = 'Miêu tả';
                break;
            case 'Job':
                $translated_text = 'Công việc';
                break;
            case 'E-mail':
                $translated_text = 'Email';
                break;
            case 'Phone':
                $translated_text = 'Số điện thoại';
                break;
            case 'Location':
                $translated_text = 'Vị trí';
                break;
            case 'Friendly Address':
                $translated_text = 'Địa chỉ';
                break;
            case 'Map Location':
                $translated_text = 'Vị trí bản đồ';
                break;
            case 'Latitude':
                $translated_text = 'Vĩ độ';
                break;
            case 'Longitude':
                $translated_text = 'Kinh độ';
                break;
            case 'Socials':
                $translated_text = 'Mạng xã hội';
                break;
            case 'Add Another Network':
                $translated_text = 'Thêm Network';
                break;
            case 'Remove Network':
                $translated_text = 'Xóa Network';
                break;
            case 'Save Profile':
                $translated_text = 'Lưu hồ sơ';
                break;
            case 'All Reviews':
                $translated_text = 'Tất cả đánh giá';
                break;
            case 'Remove property from favorite successfully.':
                $translated_text = 'Xóa BĐS khỏi mục yêu thích thành công.';
                break;
            case 'Remove property from favorite error.':
                $translated_text = 'Xóa BĐS khỏi mục yêu thích thất bại.';
                break;
            case 'Remove Favorite':
                $translated_text = 'Xóa yêu thích';
                break;
            case 'Add Favorite':
                $translated_text = 'Thêm yêu thích';
                break;
            case 'Your nonce did not verify.':
                $translated_text = 'Không xác minh';
                break;
            case 'Please login to add favorite.':
                $translated_text = 'Vui lòng đăng nhập để thêm yêu thích.';
                break;
            case 'Property did not exists.':
                $translated_text = 'BĐS không tồn tại.';
                break;
            case 'Add favorite successfully.':
                $translated_text = 'Thêm yêu thích thành công.';
                break;
            case 'Please login to remove favorite.':
                $translated_text = 'Vui lòng đăng nhập để xóa yêu thích.';
                break;
            case 'Action':
                $translated_text = 'Hành động';
                break;
            case 'Actions':
                $translated_text = 'Hành động';
                break;
            case 'My Saved Search':
                $translated_text = 'Tìm kiếm đã Lưu của tôi';
                break;
            case 'Saved Search Query':
                $translated_text = 'Truy vấn tìm kiếm đã lưu';
                break;
            case 'Number Properties':
                $translated_text = 'Số BĐS';
                break;
            case 'Times':
                $translated_text = 'Thời gian';
                break;
            case 'No property alert found.':
                $translated_text = 'Không tìm thấy lưu trữ nào.';
                break;
            case 'Add New Property':
                $translated_text = 'Thêm mới Bất động sản';
                break;
            case 'No results found':
                $translated_text = 'Không tìm thấy kết quả';
                break;
            case 'Enter search e.g. Lincoln Park':
                $translated_text = 'Nhập vị trí';
                break;
            case 'Upload Files':
                $translated_text = 'Tải lên File';
                break;
            case 'Add Group':
                $translated_text = 'Thêm nhóm';
                break;
            case 'Remove Group':
                $translated_text = 'Xóa nhóm';
                break;
            case 'Group {#}':
                $translated_text = 'Nhóm {#}';
                break;
            case 'Key':
                $translated_text = 'Từ khóa';
                break;
            case 'Value':
                $translated_text = 'Giá trị';
                break;
            case 'Floor Group {#}':
                $translated_text = 'Tầng {#}';
                break;
            case 'Add Floor':
                $translated_text = 'Thêm tầng';
                break;
            case 'Remove Floor':
                $translated_text = 'Xóa tầng';
                break;
            case 'Save & Preview':
                $translated_text = 'Lưu & xem trước';
                break;
            case 'Change Password':
                $translated_text = 'Thay đổi mật khẩu';
                break;
            case 'Old password':
                $translated_text = 'Mật khẩu cũ';
                break;
            case 'New password':
                $translated_text = 'Mật khẩu mới';
                break;
            case 'Retype password':
                $translated_text = 'Xác nhận mật khẩu';
                break;
            case 'Team Members':
                $translated_text = 'Thành viên';
                break;
            case 'All Members':
                $translated_text = 'Tất cả thành viên';
                break;
            case 'No agents found.':
                $translated_text = 'Không tìm thấy thành viên';
                break;
            case 'Add Member':
                $translated_text = 'Thêm thành viên';
                break;
            case 'Search..':
                $translated_text = 'Tìm kiếm..';
                break;
            case 'Add Agent':
                $translated_text = 'Thêm thành viên';
                break;
            case 'Agent not found':
                $translated_text = 'Không tìm thấy thành viên';
                break;
            case 'Agent exists':
                $translated_text = 'Thành viên đã tồn tại';
                break;
            case 'Add agent to team successful':
                $translated_text = 'Thêm thành viên thành công';
                break;
            case 'Remove agent from team successful':
                $translated_text = 'Xóa thành viên thành công';
                break;
            case 'Are you sure?':
                $translated_text = 'Bạn có chắc chắn không?';
                break;
        }
    }
    else if ($domain == 'wp-private-message') {
        switch ($text) {
            case 'Sent message successful.':
                $translated_text = 'Đã gửi tin nhắn thành công.';
                break;
            case 'Send message error.':
                $translated_text = 'Gửi tin nhắn bị lỗi.';
                break;
            case 'All':
                $translated_text = 'Tất cả';
                break;
            case 'Read':
                $translated_text = 'Đã đọc';
                break;
            case 'Unread':
                $translated_text = 'Chưa đọc';
                break;
            case 'Delete Conversation':
                $translated_text = 'Xóa cuộc trò chuyện';
                break;
            case 'No message found':
                $translated_text = 'Không tìm thấy tin nhắn';
                break;
        }
    }
    else if ($domain == 'cmb2') {
        switch ($text) {
            case 'Select / Deselect All':
                $translated_text = 'Chọn / Bỏ chọn tất cả';
                break;
        }
    }
    return $translated_text;
}, 999, 3);