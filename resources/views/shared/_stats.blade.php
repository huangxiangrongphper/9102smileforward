<a href="{{ route('users.followings', $user->id) }}">
    <strong id="following" class="stat">
        {{ count($user->followings) }}
    </strong>
    生活日常
</a>
<a href="{{ route('users.followers', $user->id) }}">
    <strong id="followers" class="stat">
        {{ count($user->followers) }}
    </strong>
    技术文章
</a>
<a href="{{ route('users.show', $user->id) }}">
    <strong id="statuses" class="stat">
        {{ $user->statuses()->count() }}
    </strong>
    网站公告
</a>
