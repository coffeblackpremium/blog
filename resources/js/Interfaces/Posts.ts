export interface User {
    id: number,
    name: string,
    email: string,
    email_verified_at: string,
    image: string,
    is_admin: number,
    updated_at: string,
    created_at: string,
}

export interface Post {
    id: number,
    title: string,
    body: string,
    subtitle: string,
    slug: string,
    user_id: number,
    created_at: string,
    updated_at: string,
    user: User,
}

